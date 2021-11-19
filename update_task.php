<?php
require_once 'task.php';
session_start();

$id = $_POST['id'];
$text = $_POST['text'];

if ($text !== '') {
    $task = new Task($id);

    if ($text == $task->text) {
        $_SESSION['same_task'] = true;
        header('Location: edit_task.php?id=' . $id);
    } else {
        $task->update($text);
        header('Location: form.php');
    }

} else {
    $_SESSION['empty_task'] = true;
    header('Location: edit_task.php?id=' . $id);
}