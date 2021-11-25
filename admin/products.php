<?php 
    session_start();
    $config = require '../config/config.php';
    $query = "SELECT * FROM categories";
    $res = $mysql->query($query);
    $null_category = NULL;

    $page = $_GET['page'] ?? 1;
    if ($page < 1) {
        $page = 1;
    }


    /**
     * ПОЛУЧИТЬ КОЛИЧЕСТВО ПРОДУКТОВ
     */

    $take = 5;
    #1 страница пропустить 0 взять 5
    #2 страница пропустить 5 взять 5
    #3 страница пропустить 10 взять 5

    $skip = ($page - 1) * $take;

    $products = $mysql->query("SELECT p.*, c.name as category FROM products p
    JOIN categories c ON c.id = p.category_id
    LIMIT $skip, $take
    ");
?>

<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/style.css?<?= time()?>">
        <title>Продукты</title>

        <style>
            .product-picture {
                height: 100px;
                width: auto;
            }

            .product-delete {
                line-height: 100px;
            }
        </style>
    </head>
    <body>
        <?php
            $message = [
                'errorProductUpload' =>  'Ваш файл не картинка',
                'errorProductSize' => 'Размер файла больше 3 мб',
                'noCategory' => 'Вы не выбрали категорию'
            ];
            foreach ($message as $key => $value) {
                if (isset($_SESSION[$key])) {

                    echo "<div class = 'alert alert-warning text-center' role = 'alert'>
                        $value
                    </div>";
                    unset($_SESSION[$key]); 
                }
            }
            
        ?>
        <div class = 'container mt-5'>
           <form enctype="multipart/form-data" action="actions\create_product.php" method="post">
               <input required class="form-control mb-2" name ='name' placeholder="Имя продукта">
               <textarea required class="form-control mb-2" name ='description' row = '3' placeholder="Введите описание продукта"></textarea>
               <input required class="form-control mb-2" name='vendor_code' placeholder="Введите код продавца">
               <input required class="form-control mb-2" type="number" name='price' placeholder="Введите цену">
               <select name="category_id" class='form-control mb-2'>
                    <?php 
                      echo "<option value ='{$null_category}' selected disabled>--- Выберите категорию ---</option>";
                    foreach ($res as $category) {
                        echo "<option value ='{$category['id']}'>{$category['name']}</option>";
                    }
                     ?>

                </select>
                <h3>Выберите картинку для продукта</h3>
               <input class="form-control mb-2 w-50" type="file" name="file" placeholder="Выберите картинку для продукта">
               <button type="submit" class='btn btn-success w-100'>Сохранить</button>
           </form>

           <table class='table mt-5 table-bordered'>
               <thead>
                   <tr>
                       <th>id</th>
                       <th>Имя</th>
                       <th>Описание</th>
                       <th>Артикул</th>
                       <th>Картинка</th>
                       <th>Цена</th>
                       <th>Категория</th>
                       <th></th>
                   </tr>
               </thead>
               <tbody>
                    <?php

                    if ($products->rowCount() == 0) {
                        echo "
                            <tr>
                                <td class='text-center' colspan=8>
                                    <em>Продукты отсутствуют</em>
                                </td>
                            </tr>
                        ";
                    }

                    foreach ($products as $product) {
                        echo "
                        <tr>
                            <td>{$product['id']}</td>
                            <td>{$product['name']}</td>
                            <td>{$product['description']}</td>
                            <td>{$product['vendor_code']}</td>
                            <td>
                                <img src='../uploads/{$product['picture']}' class='product-picture'>
                            </td>
                            <td>{$product['price']}</td>
                            <td>{$product['category']}</td>
                            <td class='text-center product-delete'>
                                <a
                                    class='btn btn-danger'
                                    href='actions/del_product.php?id={$product['id']}'
                                >
                                    x
                                </a>
                            </td>
                        </tr>
                        ";
                    }

                    $disabled = $page == 1 ? 'disabled' : '';
                    $prevPage = $page - 1;
                    $nextPage = $page + 1;
                    echo 
                    "
                    <tr>
                        <td class='text-center' colspan='8'>
                            <button class='btn btn-info' $disabled>
                                <a href='products.php?page=$prevPage'> < </a>
                            </button>

                            <button class='btn btn-info'>
                                <a href='products.php?page=1'> 1 </a>
                            </button>

                            <button disabled class='btn btn-info'>
                                <a href='products.php?page=$page'> $page </a>
                            </button>                            

                            <button class='btn btn-info'>
                                <a href='products.php?page=4'> 4 </a>
                            </button>                            

                            <button class='btn btn-info'>
                                <a href='products.php?page=$nextPage'> > </a>
                            </button>
                        </td>
                    </tr>
                    ";
                    /**
                     * ДИНАМИЧЕСКИ ВЫВОДИТЬ ПОСЛЕДНЮЮ
                     * ОРГАНИЧИТЬ ПОСЛЕДНЮЮ СТРАНИЦУ
                     */
                    ?>
               </tbody>
           </table>
           
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
       
</html>