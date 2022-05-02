<?php
//trabalhar com strings em  multiplas linhas
$n1 = 'Felipe';
$n2 = 'Y';
$n3 = 'Castro';

// Múltiplas linhas
$a = "
Seja bem vindo:
$n1 $n2 $n3
";

echo $a;
echo "\n";

// Heredoc ele não precisa de aspas, PODE-SE DIZER QUE ELE SUBSTITUI AS ASPAS
$b1 = <<<EOF
Seja bem vindo:
$n1 $n2 $n3\n
EOF;

echo $b1;
echo "\n";

//O HERECIDOC FUNCIONA EM VÁRIOS LINGUAGENS ELE ACEITA COMO MYSQL OU HTML no vs
$b2 = <<<HTML
<b>Seja bem vindo:</b>
<p>$n1 $n2 $n3</p>\n
HTML;

echo $b2;
echo "\n";

$b3 = <<<SQL
SELECT * FROM table;\n
SQL;

echo $b3;
echo "\n";

// Nowdoc parecido com heredoc porém depois dos 3 sinais menos coloca ele em
//aspas simples e o último não, ELE É PARECIDO COM ASPAS SIMPLES, OU SEJA
//nao reconhece o \n e nem os caracteres especiais
$c1 = <<<'EOF'
Seja bem vindo:
$n1 $n2 $n3\n
EOF;

echo $c1 . "\n";
echo "\n";

$c2 = <<<'HTML'
<b>Seja bem vindo:</b>
<p>$n1 $n2 $n3</p>\n
HTML;

echo $c2 . "\n";
echo "\n";

$c3 = <<<'SQL'
SELECT * FROM table;\n
SQL;

echo $c3 . "\n";
echo "\n";

// Heredoc e Nowdoc para PHP 7.3 ou superior
function test1()
{
    $d = <<<EOF
        Teste 123
    EOF;
}

// Heredoc e Nowdoc para PHP 7.2 ou inferior
function test2()
{
    $e = <<<EOF
        Teste 123
EOF;
}