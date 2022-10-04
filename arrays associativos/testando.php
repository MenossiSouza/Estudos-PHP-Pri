<?php

$cadastro1 = ['paciente' => 'Paula', 'idade' => 31];
$cadastro2 = ['paciente' => 'Marcos', 'idade' => 18];
$cadastro3 = ['paciente' => 'Luciana', 'idade' => 22];

$cadastrodepacientes = [$cadastro1, $cadastro2, $cadastro3];


foreach ($cadastrodepacientes as $cadastro){

    echo $cadastro ['idade'] . PHP_EOL;
} echo PHP_EOL;

$cadastrodepacientes = ['001' => ['paciente' => 'Paula', 'idade' => 31],
'002' => ['paciente' => 'Marcos', 'idade' => 18],
'003' => ['paciente' => 'Luciana', 'idade' => 22]

];

//exibindo os indices + dados de cada índice

foreach ($cadastrodepacientes as $ficha => $cadastro){

    echo  $ficha . " " . $cadastro ['paciente'] . " " . $cadastro ['idade'] . " anos" . PHP_EOL;
} echo PHP_EOL;

//exibindo os índices

foreach ($cadastrodepacientes as $ficha => $cadastro){

    echo $ficha . PHP_EOL;
} echo PHP_EOL;

//adicionando dados

$cadastrodepacientes ['004'] =  ['paciente' => "Bruno", 'idade' => '21' ];

foreach ($cadastrodepacientes as $ficha => $cadastro){

    echo $ficha . PHP_EOL;
}