<?php

// IF/for/while/do...etc VALIDACAO(  {}      )
// VARIAVEIS, FUNÇÃO, COMANDO - ACAO (  ;   )
// BEGIN, TRY, CATCH, BEGIN TRAN, COMMIT - DEBUG(   {} ou () ou []       ) 
$conta1 = ['titular' => 'Priscila','saldo' => 5000];
$conta2 = ['titular' => 'Bruno', 'saldo' => 3800];
$conta3 = ['titular' => 'Maria', 'saldo' => 1500];

$contascorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contascorrentes); $i++){

    echo $contascorrentes [$i] ['titular'] . PHP_EOL;
}


