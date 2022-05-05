<?php
//FOREACH estrutura de repetição que funciona com arrays
$items = ['Arroz', 'Feijão', 'Trigo'];

foreach ($items as $item) {
    echo "-> {$item}\n";
}

echo "\n";

$item = [
    'name' => 'Arroz',
    'price' => 10,
];

foreach ($item as $key => $value) {
    echo "-> {$key}: {$value}\n";
}
