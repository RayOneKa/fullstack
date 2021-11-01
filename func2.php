<?php

$a = 5;

$b = &$a;

echo $a, ' ', $b;
echo '<br>';

$b = 10;

echo $a, ' ', $b;
echo '<br>';

$foo = function () use (&$a) {
    $a = 999;
    echo $a;
};

$foo();

echo '<br>';
echo $a, ' ', $b;