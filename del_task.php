<?php
session_start();

require_once 'task.php';

$id = $_POST['id'];

$task = new Task($id);
$task->del();
$_SESSION['del'] = true;

header('Location: form.php');