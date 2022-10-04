<?php

$nome = "Priscila";
$idade = 29;

echo "Só é permitido o acesso de pessoas maiores de 18 anos." . PHP_EOL;

if ($idade >18) {

    echo "Você é maior de 18 anos. Acesso liberado. Bem vinda $nome."; 
}

else {

    echo "$nome, infelizmente você não tem idade suficiente para ter acesso.";
}

