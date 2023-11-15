<?php

require_once "Table.php";

require_once "Apple.php";
require_once "Lemon.php";
require_once "Tangerine.php";

$colors = [
    1 => 'Red',
    2 => 'Green',
    3 => 'Yellow',
];

$apple = new Apple($colors[rand(1, 3)], rand(10, 100), rand(1,9));
$lemon = new Lemon($colors[rand(1, 3)], rand(10, 100), rand(1,9));
$tangerine = new Tangerine($colors[rand(1, 3)], rand(10, 100), rand(1,9));

$apple->ripen();

$table = new Table(rand(50,250), rand(50,250), [$apple, $lemon, $tangerine]);

echo "<pre>";
print_r($table);
echo "</pre>";