<?php 
session_start();
require_once 'task.php';

$id = $_GET['id'];
$task = new Task($id);

?>

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Редактирование задачи</title>
    </head>
    <body class='container mt-5'>

        <?php

            $alerts = [
                'empty_task' => 'Текст задачи не может быть пустым!',
                'same_task' => 'Вы не изменили текст задачи!',
            ];

            foreach ($alerts as $key => $value) {
                if (isset($_SESSION[$key])) {
                    echo
                    '
                    <div id="alert" class="alert alert-warning text-center" role="alert">
                        '.$value.'
                    </div>
                    ';
                    unset($_SESSION[$key]);
                }
            }

            if ($task->text !== null) {
            echo "
            <form action='update_task.php' method='POST'>
                <input required name='text' class='form-control mb-2' value='{$task->text}'>
                <input hidden name='id' value='{$task->id}'>
                <button class='btn btn-success w-100'>Сохранить</button>
            </form>
            ";
            } else {
                echo '<em>Задачи с таким id не найдена!</em>';
            }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>