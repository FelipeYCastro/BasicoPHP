<?php
//OPERADORES DE COMPARAÇÃO GERAM VALORES BOOLEANOS
//REPRESENTADO POR 2 SINAIS IGUAIS (==)
$a = 1 == 1; // true, se o 1 for igual(==)a 1 será verdadeiro
$b = 1 == 2; // false

var_dump($a);
var_dump($b);

$c = 1 == '1'; // true
$d = 'a' == 'A'; // false não funciona case sensitive

var_dump($c);
var_dump($d);
