<?php

function sacar($conta, $valorAsacar){

    if ($valorAsacar>$conta['saldo']){
         exibirMensagem(mensagem:"Você não pode sacar este valor.");
    } else 
    echo $conta ['saldo'] -= $valorAsacar;

    return $conta;
}

function exibirMensagem($mensagem){

   echo $mensagem . PHP_EOL;

}

$conta1 = ['titular' => 'Priscila','saldo' => 5000];
$conta2 = ['titular' => 'Bruno', 'saldo' => 3800];
$conta3 = ['titular' => 'Ana', 'saldo' => 1500];

$contascorrentes = [$conta1, $conta2, $conta3];

foreach ($contascorrentes as $conta){
    echo $conta ['titular'] . PHP_EOL;
   } echo PHP_EOL;

$contascorrentes = [
    12345678910 => $conta1,
    12345678911 =>$conta2,
    12325678912 =>$conta3
];


foreach ($contascorrentes as $cpf=>$conta){

    echo $cpf . PHP_EOL;
}; echo PHP_EOL;
 

foreach ($contascorrentes as $cpf=>$conta){

    echo $cpf . " ". $conta['titular'] . " " . $conta['saldo'] . PHP_EOL;

}; echo PHP_EOL;

$contascorrentes ['12345678910'] = sacar ($contascorrentes ['12345678910'], valorAsacar: 900);

foreach ($contascorrentes as $cpf=>$conta){

    exibirMensagem(mensagem: $cpf . " ". $conta['titular'] . " " . $conta['saldo'] );
}
   
