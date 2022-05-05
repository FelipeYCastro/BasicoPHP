<?php
//do while
do {
    echo "FIQUE PARADO!\n";

    $value = readline('Digite vermelho, amarelo ou verde: ');
} while ($value !== 'verde');//executa e quanto for verdadeiro termina execução

echo "CONTINUE!\n";
