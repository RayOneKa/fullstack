<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $name = 'Rail';
    $age = 28;
    echo $name . ' ' . $age . '<br>';
    echo "My name is $name and I'm $age years old<br>";
    $last_name = 'Mail';
    $firstName = 'Ivan';
    $last_name2 = 'Mingaliev';
    //неправильное название переменной
    // $2last_name = 'sdfasdf';

    $a = 5;
    $b = 10;
    echo $a + $b;
    echo '<br>';
    echo $a * 2 - $b;

    echo '<br>';

    $i = 0;
    echo '$i равно ' . $i . '<br>';
    $i = $i + 1;
    echo '$i равно ' . $i . '<br>';
    ++$i;
    echo '$i равно ' . $i . '<br>';
    --$i;
    echo '$i равно ' . $i . '<br>';

    $gam = 4.95;
    $gamK = 2;
    $kok = 1.95;
    $kokK = 1;
    $pep = 0.95;
    $pepK = 1;
    $nds = 1.2;
    $cha = 1.1;
    
    echo (($gam * $gamK + $kok * $kokK + $pep * $pepK) * $nds) * $cha;
    echo '<br>';

    $num = 1;
    echo "$num <br>";
    $num++;
    echo "$num <br>";
    $num++;
    echo "$num <br>";
    $num++;
    echo "$num <br>";
    $num++;
    echo "$num <br>";

    $i = 0;
    echo ++$i . '<br>';
    echo ++$i . '<br>';
    echo ++$i . '<br>';
    echo ++$i . '<br>';
    echo ++$i . '<br>';

    echo '--------------<br>';

    $i = 0;
    echo $i++ . '<br>';
    echo ++$i;

?>
</body>
</html>