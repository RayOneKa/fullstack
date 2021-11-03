<?php

$mysql = new mysqli('localhost', 'root', 'root', 'fullstack');

$name = $_POST['name'];
$login = $_POST['login'];
$age = $_POST['age'];

$query = "INSERT INTO users (name, login, age) VALUES('$name', '$login', '$age')";
$res = $mysql->query($query);
header('Location: index.php');