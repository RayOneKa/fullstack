<pre>
<?php

$a = [1, 2, 3, 4, 5];

print_r($a);

echo $a[1];
echo '<br>';
echo $a[0];
echo '<br>';

$count = count($a);
echo "count - $count";
echo '<br>';

$i = 0;
while ($i < $count) {
    echo $a[$i] . ' ';
    $i++;
}

echo '<br>';
$a[] = 6;
print_r($a);

$b = [];
$b[2] = 5;

echo '<br>';
print_r($b);
echo '<br>';

echo $b[2];
echo '<br>';
var_dump($b[5]);

$b[3] = 6;
echo '<br>';
print_r($b);
echo '<br>';

$b[2] = 4;
echo '<br>';
print_r($b);
echo '<br>';

$c = [];
$c['first'] = 'PHP';
$c['second'] = 'JavaScript';
echo '<br>';
print_r($c);
echo '<br>';

foreach ($c as $item) {
    echo $item . ' ';
}
echo '<br>';

foreach ($c as $key => $value) {
    echo "$key: $value<br>";
}

$person = [
    'name' => 'Rail',
    'age' => 28,
    'height' => 183,
];

$person2 = [
    'name' => 'Jhon',
    'age' => 82,
    'height' => 138,
];

echo '<br>';
print_r($person);
echo '<br>';

echo "$person[name] {$person['age']} $person[height]";
echo '<br>';

$colors = ['red', 'green', 'blue'];
echo implode(', ', $colors);

$colors = 'red, green, blue, pink, yellow, brown';
echo '<br>';
print_r(explode(', ', $colors));
echo '<br>';

echo '<hr>';