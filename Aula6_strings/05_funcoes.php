<?php
// funções para trabalhar com strings
echo strtoupper ('felipe') . "\n";// deixa tudo maiusculo

echo strtolower ('FELIPE') . "\n";//deixa tudo  minusculo

echo trim(' Felipe ') . "\n";//remove os espaços antes e depois da string

echo ltrim(' Felipe ') . "\n";//left trim ou seja remove o espaço antes

echo rtrim(' Felipe ') . "\n";//right trim remove o espaço depois direita

echo 'R$' . number_format(1000000, 2, ',', '.') . "\n";//formata 2 casas decimais
//com virgula e ponto no milhar

echo str_replace('p', '', "Oplá, psepjpa pbpem vpinpdo.") . "\n";
//substitui a letra p por nada nesta string

echo strlen('Felipe Y Castro') . "\n";//conta o número de caracteres existentes nesta string