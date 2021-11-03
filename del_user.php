<?php

$mysql = new mysqli('localhost', 'root', 'root', 'fullstack');

$id = $_POST['id'];

$query = "DELETE FROM users WHERE id = $id";
$mysql->query($query);
header('Location: index.php');