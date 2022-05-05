<?php
// FOR
$numeroDeMensagens = (int) readline('Digite o número de mensagens a serem exibidas: ');

for ($count = 0; $count < $numeroDeMensagens; $count++) {
    echo "{$count} - Mensagem\n";
}
