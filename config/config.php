<?php

$user = $pass = 'root';
$host = 'localhost';
$dbname = 'fullstack';
$port = 3307;
$mysql = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $user, $pass);

return [
    'mysql' => $mysql
];