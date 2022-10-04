<?php

$mass= 77;
$height= 1.68;
$result= $mass / $height**2;

if ($result < 18.5) {

    echo "Você está abaixo do peso." . PHP_EOL;
}else if ($result >=18.5 && $result <=24.9 ) {

    echo "Você está no peso ideal." . PHP_EOL;
}else{

    echo "Você está acima do peso." . PHP_EOL;
}