<?php

function sayHello ()
{
    echo 'Hello!<br>';
}

function litres ($t) {
    return floor($t / 2);
}

function repeatStr ($n, $str)
{
    $res = '';
    for ($i = 0; $i < $n; $i++) {
        //$res = $res . $str;
        $res .= $str;
    }
    return $res;
}

function nthEven ($n) {
    return $n * 2 - 2;
}

function solution ($str){
    $res = '';
    for ($i = 1; $i <= strlen($str); $i++) {
        $res .= $str[strlen($str) - $i];
    }
    return $res;
}

function quotable($name, $quote) {
    $message = '[name] said: "[quote]"';
    $message = str_replace('[name]', $name, $message);
    $message = str_replace('[quote]', $quote, $message);
    return $message;
}

function getCount($str) {
    $vowelsCount = 0;
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $vowelsCount++;
        }
    }
    return $vowelsCount;
}


echo 'из файла funcs.php<br>';
sayHello();