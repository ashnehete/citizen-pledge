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
     * @param $type_id string
     * @return string
     */
    public function createAccount($email, $username, $password, $confirm_password, $type_id)
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
            $stmt->bindParam('email', $email, PDO::PARAM_STR);
            $stmt->bindParam('username', $username, PDO::PARAM_STR);
            $stmt->bindParam('password', $password, PDO::PARAM_STR);
            $stmt->bindParam('type_id', $type_id, PDO::PARAM_INT);
            $stmt->execute();
        }

        return 'Account created successfully. Login now.';
    }

    /**
     * @param $username string Username or Email
     * @param $password string
     * @return string Message or HTML
     */
    public function login($username, $password)
    {
        $sql = 'SELECT id, name, type_id, image_url FROM users WHERE (username=:username OR email=:email) AND password=MD5(:password)';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('username', $username, PDO::PARAM_STR);
            $stmt->bindParam('email', $username, PDO::PARAM_STR);
            $stmt->bindParam('password', $password, PDO::PARAM_STR);
            $stmt->execute();
            $row = $stmt->fetch();
            if ($row) {
                $_SESSION[LOGGED_IN] = true;
                $_SESSION[USER_NAME] = $row['name'];
                $_SESSION[USER_ID] = intval($row['id']);
                $_SESSION[USER_TYPE_ID] = intval($row['type_id']);
                $_SESSION[USER_PIC] = ($row['image_url'] == null) ? $row['image_url']: 'https://www.drupal.org/files/styles/grid-2/public/default-avatar.png';
                return true;
            } else
                return 'Cannot find you, Have you registered? Check email and password.';
        }
        return SERVER_ERROR;
    }

    public function logout()
    {
        session_unset();
        return true;
    }

    public function insertDetails($name, $desc, $mobile, $image_url, $head_of_ngo = NULL)
    {
        $sql = 'UPDATE users SET name=:name, description=:desc, mobile=:mobile, image_url=:image_url, head_of_ngo=:head_of_ngo' .
            ' WHERE id=:id';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('name', $name, PDO::PARAM_STR);
            $stmt->bindParam('desc', $desc, PDO::PARAM_STR);
            $stmt->bindParam('mobile', $mobile, PDO::PARAM_STR);
            $stmt->bindParam('image_url', $image_url, PDO::PARAM_STR);
            $stmt->bindParam('head_of_ngo', $head_of_ngo, PDO::PARAM_STR);
            $stmt->bindParam('id', $_SESSION[USER_ID], PDO::PARAM_INT);
            $stmt->execute();
        }
        $_SESSION[USER_NAME] = $name;
        $_SESSION[USER_PIC] = $image_url;
        return 'Details inserted.';
    }

    public function uploadProfilePicture($file)
    {
        if ($file['error'] != 0)
            return null;
        $imageFileType = pathinfo($file['name'], PATHINFO_EXTENSION);
        $target_file = './uploads/users/' . $_SESSION[USER_ID] . '.' . $imageFileType;
        move_uploaded_file($file['tmp_name'], $target_file);
        return $target_file;
    }

    public function getNgoDetails($ngo_id) {
        $response = [];
        $sql = 'SELECT COUNT(id) as count, MAX(pledges) as max, SUM(pledges) as sum FROM events WHERE ngo_id=:ngo_id';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('ngo_id', $ngo_id, PDO::PARAM_INT);
            $stmt->execute();
            $response = $stmt->fetch();
        }
        $sql = 'SELECT email, mobile, description, head_of_ngo, name, image_url FROM users WHERE id=:ngo_id';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('ngo_id', $ngo_id, PDO::PARAM_INT);
            $stmt->execute();
            $response = array_merge($response, $stmt->fetch());
            if ($response['image_url'] == null)
                $response['image_url'] = 'https://www.drupal.org/files/styles/grid-2/public/default-avatar.png';
        }
        $sql = 'SELECT id, name FROM events WHERE ngo_id=:ngo_id AND start_time>NOW()';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('ngo_id', $ngo_id, PDO::PARAM_INT);
            $stmt->execute();
            $response['upcoming'] = $stmt->fetchAll();
        }
        $sql = 'SELECT id, name FROM events WHERE ngo_id=:ngo_id AND end_time<NOW()';
        if ($stmt = $this->_db->prepare($sql)) {
            $stmt->bindParam('ngo_id', $ngo_id, PDO::PARAM_INT);
            $stmt->execute();
            $response['past'] = $stmt->fetchAll();
        }
        return $response;
    }
}