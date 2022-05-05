<?php
//RETURN
function welcome(): void
{
    $name = readline('Digite o seu nome: ');
    echo "Bem vindo {$name}\n";
}

welcome();
welcome();

echo "\n\n";


//segunda parte do código ou outro código
function welcomeWithReturn(): string
{
    $name = readline('>>> Digite o seu nome: ');
    return ">>> Bem vindo {$name}\n";
}

$a = welcomeWithReturn();
$b = welcomeWithReturn();

echo $a;
echo $b;
echo welcomeWithReturn();
