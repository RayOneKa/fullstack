<?php

$a = 40;

if ($a == 10) {
    echo '$a = 10';
} else if ($a == 9) {
    echo '$a = 9';
} else if ($a == 8) {
    echo '$a = 8';
} else {
    echo '$a != 10 and $a != 9 and $a != 8';
}

echo '<br>';

if ($a > 100) {
    echo 'a > 100';
} else if ($a > 50) {
    echo 'a > 50<br>';
    echo 'a <= 100';
} else {
    echo 'a <= 50<br>';
}

if ($a == 40) echo 'a = 40';

if ($a < 100) {
    if ($a < 50) {
        echo '<br>YES!';
    }
}

if ($a > 20 and $a < 50) {
    echo '<br> a где-то между 20 и 50';
}

$b = 90;

if ($a < 50 or $b > 100) {
    echo '<br>Да!';
}

echo '<br>';
echo 8 - 6.4 . '<br>';
// 1.59999999999
if (8 - 6.4 == 1.6) {
    echo 'true';
} else {
    echo 'false';
}
echo '<br>';

if (round(8 - 6.4, 2) == 1.6) {
    echo 'true';
} else {
    echo 'false';
}

$x = 8 - 6.4;
$y = 1.6;
echo '<br>';

if (abs($x - $y) < 0.00001) {
    echo 'true';
} else {
    echo 'false';
}

$a = 10;
if ($a >= 10) {
    echo '<br>!!!';
}

$isRain = false;

if (!$isRain) {
    echo '<br>Не берите зонтик!';
}

$age = 20;
$haveDrivingLicense = true;
$canDrive = $age >= 18;
if ($canDrive and $haveDrivingLicense) {
    echo '<br> you can drive!';
}