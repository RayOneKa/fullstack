<?php
session_start();

$config = require '../config/config.php';
$query = "SELECT c.id, c.name, c.picture, c.description, count(p.id) quantity FROM categories c
join products p on p.category_id = c.id
group by c.id";
$categories = $mysql->query($query);

?>

<!doctype html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <title>Категории</title>
        <style>
            a {
                text-decoration: none;
            }
            .category-picture {
                height: 100px;
                width: auto;
            }
        </style>
    </head>
    <body>
        <div class='container mt-5'>

            <?php

                if (isset($_SESSION['errorCategoryUpload'])) {
                    echo "
                        <div class='alert alert-warning text-center' role='alert'>
                            Ваш файл не картинка!
                        </div>
                        ";
                    unset($_SESSION['errorCategoryUpload']);
                }

            ?>

            <form enctype="multipart/form-data" method='POST' action="actions/create_category.php">
                <input required class='form-control mb-2' name='name' placeholder="Имя категории">
                <textarea class='form-control mb-2' rows='3' required name='description' placeholder="Описание"></textarea>
                <input class='mb-2' type="file" name='file'>
                <button class='btn btn-success w-100'>Сохранить</button>
            </form>

            <table class="table table-bordered mt-5">
                <thead>
                    <tr>
                        <th>Имя</th>
                        <th>Изображение</th>
                        <th>Описание</th>
                        <th>Кол-во товаров</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                        foreach ($categories as $category) {
                            echo "
                            <tr>
                                <td>{$category['name']}</td>
                                <td class='text-center'>
                                    <img src='../uploads/{$category['picture']}' class='category-picture'>
                                </td>
                                <td>{$category['description']}</td>
                                <td>{$category['quantity']}</td>
                            </tr>
                            ";
                        }

                    ?>
                </tbody>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>