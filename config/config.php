<?php

$config_user = $config_pass = 'root';
$host = 'localhost';
$dbname = 'fullstack';
$port = 3307;
$mysql = new PDO("mysql:host=$host;dbname=$dbname;port=$port", $config_user, $config_pass);

$exec = function ($query, $data) use ($mysql) {
    $res = $mysql->prepare($query);
    $res->execute($data);
    print_r($res->errorInfo());
};


return [
    'mysql' => $mysql,
    'exec' => $exec
];