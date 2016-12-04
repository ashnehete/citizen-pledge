<?php
/**
 * Created by PhpStorm.
 * User: Aashish Nehete
 * Date: 04-Dec-16
 * Time: 16:24
 */

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

include_once 'constants.php';

try {
    $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
    $db = new PDO($dsn, DB_USER, DB_PASS);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit;
}

?>