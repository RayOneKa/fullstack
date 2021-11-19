<?php 
session_start();
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

        <?php
            $alerts = [
                'del' => 'Задача успешно удалена!',
                'add' => 'Задача успешно добавлена!',
                'toggle' => 'Задача успешно обновлена!',
            ];

            foreach ($alerts as $key => $value) {
                if (isset($_SESSION[$key])) {
                    echo
                    '
                    <div id="alert" class="alert alert-success text-center" role="alert">
                        '.$value.'
                    </div>
                    ';
                    unset($_SESSION[$key]);
                }
            }
        ?>

        <form method="POST" action="add_task.php">
            <input required class='form-control mb-2' name='task' placeholder="Введите задачу">
            <button class='btn btn-success w-100 mb-5' type="submit">Добавить</button>
        </form>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Текст задачи</th>
                    <th>Действие</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($res as $key => $item) {
                        $n = ++$key;
                        $action = $item['finished'] ? '-' : '+';
                        $class = $item['finished'] ? 'bg-success' : '';
                        $strike = $item['finished'] ? 'line-through' : 'none';
                        echo
                        "
                        <tr class='$class' style='--bs-bg-opacity: 0.15;'>
                            <td>$n</td>
                            <td style='text-decoration: $strike'>
                                <a href='edit_task.php?id={$item['id']}'>
                                    {$item['text']}
                                </a>
                            </td>
                            <td>
                                <form method='POST' action='toggle_task.php'>
                                    <input hidden name='id' value='{$item['id']}'>
                                    <input hidden name='toggle' value='{$item['finished']}'>
                                    <button style='min-width: 37px;' class='btn btn-success'>$action</button>
                                </form>
                            </td>
                            <td>
                                <form method='POST' action='del_task.php'>
                                    <input type='hidden' name='id' value='{$item['id']}'>
                                    <button class='btn btn-danger'>x</button>
                                </form>
                            </td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <script>

            setTimeout(() => {
                //const item = document.querySelector('#alert')
                const elem = document.getElementById("alert");
                if (elem) {
                    elem.parentNode.removeChild(elem);
                }
            }, 3000)

        </script>
    </body>
</html>