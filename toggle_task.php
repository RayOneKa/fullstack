<?php
session_start();

require_once 'task.php';

$id = $_POST['id'];
$toggle = $_POST['toggle'] ? 0 : 1;

$task = new Task($id);
$task->toggle($toggle);
$_SESSION['toggle'] = true;

header('Location: form.php');