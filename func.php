<?php

function br ()
{
    echo '<br>';
}

function test ()
{
    $age = 5;
    echo "внутри функции test: $age";
}

function test2 ()
{
    global $age;
    $age = 5;
}

function global_func ()
{
    $GLOBALS['age'] = 15;
}

$age = 10;
echo "до вызова функций: $age";
br();
test();
br();
echo "после вызова функции test: $age";
br();
test2();
echo "после вызова функции test2: $age";
br();
global_func();
echo "после вызова функции global_func: $age";