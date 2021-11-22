<?php
session_start();

$name = $_POST['name'];
$description = $_POST['description'];
$file = $_FILES['file'];
$name = $file['name'];
$temp_name = $file['tmp_name'];

$types = explode('/', $file['type']);
if ($types[0] !== 'image') {
    $_SESSION['errorCategoryUpload'] = true;
    header('Location: ../../admin/categories.php');
}

$config = require_once '../../config/config.php';
$mysql = $config['mysql'];

$data = explode('.', $name);
$ext = $data[count($data) - 1];

$name = 'categories/' . time() . rand(0, 1000000) . '.' . $ext;
$fullName = '../../uploads/' . $name;
move_uploaded_file($temp_name, $fullName);