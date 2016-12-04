<?php

/**
 * Created by PhpStorm.
 * User: Aashish Nehete
 * Date: 29-Nov-16
 * Time: 20:55
 */
class User
{
    private $_db;

    public function __construct($db = NULL)
    {
        if (is_object($db))
            $this->_db = $db;
        else {
            $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
            $this->_db = new PDO($dsn, DB_USER, DB_PASS);
        }
    }

    /**
     * @param $email string
     * @param $username string
     * @param $password string
     * @param $confirm_password string
     * @param $type string
     * @return string
     */
    public function createAccount($email, $username, $password, $confirm_password, $type)
    {
        if ($password !== $confirm_password)
            return 'Passwords do not match.';

        $sql = 'SELECT id FROM users WHERE email=:email OR username=:username';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':username', $username, PDO::PARAM_STR);
            $stmt->execute();
            $row = $stmt->fetch();
            if ($row)
                return 'Error. Email or username already taken.';
        }

        $sql = 'INSERT INTO users (email, username, password, type_id) VALUES (:email, :username, MD5(:password), :type_id)';
        if ($stmt = $this->_db->prepare($sql)) {
            $type_id = (strtolower($type) === 'ngo') ? NGO : CITIZEN;

            $stmt->bindParam('email', $email, PDO::PARAM_STR);
            $stmt->bindParam('username', $username, PDO::PARAM_STR);
            $stmt->bindParam('password', $password, PDO::PARAM_STR);
            $stmt->bindParam('type_id', $type_id, PDO::PARAM_INT);
            $stmt->execute();
            $rows = $stmt->fetch();
            var_dump($rows);
            return 'Account created successfully. Login now.';
        }

        return SERVER_ERROR;
    }

    /**
     * @param $username string Username or Email
     * @param $password string
     * @return string Message or HTML
     */
    public function login($username, $password)
    {
        $sql = 'SELECT id, name FROM users WHERE (username=:username OR email=:email) AND password=MD5(:password)';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('username', $username, PDO::PARAM_STR);
            $stmt->bindParam('email', $username, PDO::PARAM_STR);
            $stmt->bindParam('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $row = $stmt->fetch();
            if ($row) {
                $_SESSION[LOGGED_IN] = true;
                $_SESSION[USER_NAME] = $row['name'];
                $_SESSION[USER_ID] = $row['id'];
                return 'You are logged in now. $_SESSION is active.';
            } else
                return 'Cannot find you? Have you registered?';
        }
        return SERVER_ERROR;
    }
}