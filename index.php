<?php

function percsistence ($num): int {
    $count = 0;
    while ($num > 9) {
        $numByString = (string)$num;
        for ($i = 0, $iMax = strlen($numByString), $res = 1; $i < $iMax; ++$i) {
            $res *= (int)($numByString[$i]);
        }
        $num = $res;
        echo $num . '<br>';
        $count++;
    }
    return $count;
}


var_dump(percsistence(1234560));