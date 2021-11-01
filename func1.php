<?php

function br ()
{
    echo '<br>';
}

function sumAandB ($a, $b)
{
    $res = $a + $b;
    echo "ответ $res";
}

function sumAb ($a, $b)
{
    $res = $a + $b;
    return $res;

    echo '!!!';
}

function canIbuy ($price, $moneyLeft)
{
    /**
    if ($moneyLeft >= $price) {
        return true;
    } else {
        return false;
    }
    */

    return $moneyLeft >= $price;
}

function countDown ($counter)
{
    while ($counter > 0) {
        echo "$counter...<br>";
        $counter--;
    }
    echo 'BOOM!<br>';
}

sumAandB(1, 2);
$result = sumAb(4, 6);
br();
echo "результат: $result";
br();
echo $result * 2;
br();

$price = 999.99;
$res = canIbuy($price, 999.99);
if ($res) {
    echo 'Могу купить.<br>';
} else {
    echo 'Не могу купить.<br>';
}

$counter = 5;
countDown($counter);
br();
echo "ну вот теперь счетчик = $counter";