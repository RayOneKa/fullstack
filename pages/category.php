<pre>
<?php

$config = require '../config/config.php';
$exec = $config['exec'];

$categoryId = $_GET['id'];

$query = $mysql->prepare("SELECT * FROM categories WHERE id = :id");
$query->execute([
    ':id' => $categoryId
]);

$category = $query->fetch();

echo "<h1>{$category['name']}</h1>";

/**
 * 
 * Привезти страницу к нормальному виду (bootstrap, etc...)
 * Вывести изображение
 * Вывести описание
 * Вывести список продуктов с ценами
 * Добавить к продуктам кнопку "Добавить в корзину"
 * У продуктов в корзине сделать кнопки + и -
 * 
 */

?>