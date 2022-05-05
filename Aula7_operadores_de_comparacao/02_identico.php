<?php
//IDENTICO É REPRESENTADO POR 3 SINAIS IGUAIS(===)
//ELE IDENTFICA O VALOR E TIPO
$a = 1 === 1; // true
$b = 1 === 2; // false

var_dump($a);
var_dump($b);

$c = 1 === '1'; // false
$d = 'a' === 'A'; // false

var_dump($c);
var_dump($d);