<?php 

require_once 'task.php';

$res = Task::getTasks();
?>

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body class='container mt-5'>

        <form method="POST" action="add_task.php">
            <input class='form-control mb-2' name='task' placeholder="Введите задачу">
            <button class='btn btn-success w-100 mb-5' type="submit">Добавить</button>
        </form>

        <table class="table table-info">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Текст задачи</th>
                    <th>Завершить</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                <!-- Вместо заглушки через цикл (foreach) вывести список задач -->
                <tr>
                    <td>1</td>
                    <td>sdfsdfsdf</td>
                    <td>
                        <button class='btn btn-success'>+</button>
                    </td>
                    <td>
                        <button class='btn btn-danger'>x</button>
                    </td>
                </tr>
            </tbody>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>