<?php

$a = 1 < 1; // false
$b = 1 < 2; // true

var_dump($a);
var_dump($b);

$c = 1 < '2'; // true
$d = 'a' < 'A'; // false
//OBS PRIMEIRO VEM OS MAIUSCULOS DEPOIS MINUSCULOS e assim por diante

var_dump($c);
var_dump($d);
