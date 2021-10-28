<?php
// для работы \r\n (перенос строки)
// header('Content-Type: text');

$message = 0.0;

if ($message == true) {
    echo 'yes';
} else {
    echo 'no';
}

echo '<br>';

$res = true;

if ($res) {
    $data = 100;
} else {
    $data = 0;
}

$data = $res ? 100 : 0; 

echo $data;

echo '<br>';

$res = 0;

$data = $res ?: 5;

echo $data;

echo '<br>';

$res = null;

$data = $res ?? 99;

echo $data;

echo '<br>';
$message = '0';
if ($message == true) {
    echo 'yes';
} else {
    echo 'no';
}
echo '<br>';

$a = 5;
$b = 10;
$res = $a <=> $b;

echo $res;

echo '<br>';

/**
 * если возраст меньше 7, то вывести "вы дошкольник"
 * если возраст больше или равен 7 и меньше или равен 18,
 * то вывести "вы учитесь в школе"
 * если возраст больше 18, то вывести "вы закончили школу"
 */

$age = 55;

 if ($age < 7) {
     echo 'вы дошкольник';
 } 
 elseif ($age < 19) {
      echo 'вы учитесь в школе';
 } else {
     echo'вы закончили школу';
 }

echo '<br>';