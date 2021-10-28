<?php

$i = 0;
while ($i < 10) {
    echo $i . '<br>';
    $i++;
}

echo 'Конец цикла while<br>';

for ($i = 5, $repeats = 1; $i < 10; $i++, $repeats++) {
    echo $i . ' ' . $repeats . '<br>';
}

echo 'Конец цикла for<br>';

echo '<select>';
echo '<option selected disabled>Выберите вариант</option>';
$i = 0;
while ($i < 10) {
    echo "<option>$i</option>";
    $i++;
}
echo '</select>';

echo '<br>';

$i = 0;
do {
    echo ++$i;
} while ($i > 10);

echo '<br>';
echo 'Цикл с прерыванием<br>';

$i = 0;
while ($i < 10) {
    if ($i > 5) {
        break;
    }
    echo $i . '<br>';
    $i++;
}

echo '<br>';
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 == 0) {
        echo $i;
    } else {
        continue;
    }

    echo '!<br>';
}

/**
 * вывести температуры по Цельсию до -50 до 50.
 * рядом вывести значения по Фаренгейту (* 9 / 5 + 32)
 * -50 12
 * -49 23
 * ****
 * 49 156
 * 50 216
 */

$temp = -50;
while ($temp < 51) {
    $far = $temp * 9 / 5 + 32;
    echo $temp .'© : ' . $far . 'F<br>';
    $temp++; 
}

for ($tc = -50; $tc <= 50; $tc++, $tf = ($tс++)*9/5+32){ 
    //$tf = $tс*9/5+32; 
    echo $tc. ' °С '. $tf. 'F'. '<br>'; 
} 