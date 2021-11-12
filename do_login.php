<?php
session_start();
include 'autoloader.php';
use Test\Auth;

$login = $_POST['login'];
$password = $_POST['password'];

$res = Auth::Login($login, $password);
if ($res['error']) {
    $_SESSION['login']['error'] = $res['errors'];
    header('Location: login.php');
} else {
    /**
     * Заполнить массив реальными данными пользователя
     */
    $_SESSION['auth'] = true;
    header('Location: index.php');
}