<?php

$conta1 = ['titular' => 'Priscila','saldo' => 5000];
$conta2 = ['titular' => 'Bruno', 'saldo' => 3800];
$conta3 = ['titular' => 'Ana', 'saldo' => 1500];

$contascorrentes = [$conta1, $conta2, $conta3];

// foreach (para cada uma) das "contascorrentes" chamando cada uma delas de "conta". Dar um nome que represente todas as variaveis.
foreach ($contascorrentes as $conta){

    //execute:
    echo $conta ['titular'] . PHP_EOL;

}

//E se quiséssemos informar os índices das contas em $contasCorrentes, por exemplo com seus CPFs?

$contasCorrentes = [
    '12345678910' => $conta1,
    '12345678911' =>$conta2,
    '12325678912' =>$conta3
];


foreach ($contasCorrentes as $conta) {
    echo $conta['titular'] . PHP_EOL;
}

/*Dessa forma, estamos modificando os índices dessa lista. Dessa forma, não poderíamos percorrer a lista somente incrementando um contador
 com o loop tradicional. Porém, como o foreach não precisa do índice para iterar por cada variável,
  ele continuará funcionando corretamente.

E se quisermos acessar esses índices com o nosso foreach? Podemos simplesmente acessar a chave, da mesma forma que acessamos o valor, 
indicando um nome para essa variável. Para informarmos que essa chave é o índice, utilizamos a mesma sintaxe de quando definimos o array: */

$contasCorrentes = [
    12345678910 => $conta1,
    12345678911 =>$conta2,
    12325678912 =>$conta3
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}

//Dessa forma, poderemos exibir os índices da mesma forma que fizemos com o titular:

$contasCorrentes = [
    12345678910 => $conta1,
    12345678911 =>$conta2,
    12325678912 =>$conta3
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . PHP_EOL;
}

/*Temos três variáveis ($conta1, $conta2 e $conta3) que não estão sendo utilizadas fora do array $contasCorrentes. Sendo assim, 
ao invés de inicializarmos essas variáveis fora do array, podemos simplesmente passar os seus valores dentro dele: */



$contasCorrentes = [
    12345678910 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    12345678911 => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    12325678912 => [
    'titular' => 'Alberto',
    'saldo' => 300
    ]
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . PHP_EOL;
}

/*Assim, temos um código menor e mais legível. Temos três contas no array $contasCorrentes, e estamos atribuindo a cada uma delas
 o índice $cpf e o valor $conta, tratando esses dados dentro do loop. */
