<?php
/**
 * Created by PhpStorm.
 * User: Aashish Nehete
 * Date: 10-Dec-16
 * Time: 20:08
 */

include_once 'inc/setup.php';
include_once 'inc/User.php';

$user = new User($db);
$user->logout();
header('Location: ./');