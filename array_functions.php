<pre>
<?php

$person = [
    'name' => 'Rail',
    'age' => 28,
    'height' => 183,
];

print_r(array_keys($person));

print_r(array_values($person));

$a = [4, 2, 5, 6, 2, 1, 5];

sort($a);
print_r($a);
rsort($a);
print_r($a);

$max = $a[0];
foreach ($a as $number) {
    if ($number > $max) $max = $number;
}
echo "<br>max: $max";
echo "<br>";
echo max($a);

$sum = 0;
foreach ($a as $number) {
    $sum += $number;
}
echo "<br>sum: $sum";

$name = 'Rail';
$name .= ' Mingaliev';
echo "<br>$name";

$colors = [
    'first' => 'red',
    'second' => 'blue',
    'third' => 'green'
];

echo "<br>";
asort($colors);
print_r($colors);

ksort($colors);
echo "<br>";
print_r($colors);

echo '<hr>';

$persons = [
    [
        'name' => 'Rail',
        'age' => 28,
        'height' => 183,
        'languages' => ['PHP', 'JS']
    ],
    [
        'name' => 'Jhon',
        'age' => 40,
        'height' => 170,
    ],
    [
        'name' => 'Rachel',
        'age' => 25,
        'height' => 161,
    ],
    [
        'name' => 'Alice',
        'age' => 40,
        'height' => 157,
    ],
];

foreach ($persons as $person) {
    foreach ($person as $key => $value) {
        echo "$key: $value ";
    }
    echo '<br>';
}

function array_cmp ($a, $b)
{
    if ($a['age'] == $b['age']) return 0;
    return $a['age'] > $b['age'] ? 1 : -1;
}

function super_array_cmp ($a, $b)
{
    return $a['age'] <=> $b['age'];
}

uasort($persons, 'array_cmp');
echo '<br>';
print_r($persons);
echo '<br>';


echo $persons[1]['languages'][0];

if (in_array(55, $a)) {
    echo '1';
} else {
    echo '0';
}

echo '<br>';

print_r($a);
echo '<br>';

$item = 6;
$index = array_search($item, $a);
if ($index === false) {
    echo "элемент $item не найден";
} else {
    echo "Такой элемент есть, его индекс $index";
}

$personUnder30 = array_filter($persons, function ($person) {
    return $person['age'] > 30;
});

echo '<br>';
print_r($personUnder30);


$new_arr = [1, 2, 3, 4, 5];
unset($new_arr[2]);

echo '<br>';
print_r($new_arr);

$deleted = array_shift($new_arr);
echo "array_shift deleted $deleted<br>";

print_r($new_arr);
$deleted = array_pop($new_arr);
echo "array_pop deleted $deleted<br>";
print_r($new_arr);