<?php
//INTERPOLAÇÃO

$name = 'Felipe';
$lastName = 'Castro';

$fullName = "$name $lastName";

echo "$fullName \n";

$fullName = "{$name} {$lastName}";

echo $fullName . "\n";