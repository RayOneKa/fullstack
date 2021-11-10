<?php

require_once 'task.php';

$text = $_POST['task'];
$task = new Task($text);
$task->add();

header('Location: form.php');