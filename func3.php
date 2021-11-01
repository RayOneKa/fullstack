<?php

function br() {
    echo '<br>';
}

function hello()
{
    echo 'Hello!';
    br();
    echo 'Hello!';
}

function fact ($n)
{
    if ($n < 1) {
        return 1;
    }

    return $n * fact($n - 1);
}

hello();
br();

$n = 5;
// вывести факториал !5

$res = 1;
while ($n > 1) {
    $res *= $n;
    $n--;
}
echo $res;
br();

$res = fact(5);
echo "fact is $res";