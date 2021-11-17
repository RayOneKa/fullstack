<?php
session_start();
require_once 'task.php';

$text = $_POST['task'];
Task::add($text);
$_SESSION['add'] = true;

header('Location: form.php');