<?php

//como podemos adicionar um item à nossa lista depois que ela já foi definida. Vamos acessar uma das contas:

echo $contasCorrentes[12345678911]['titular'];

/*Dessa forma, estaremos acessando o titular do índice 12345678911 no nosso array $contasCorrentes.
Sendo isso verdadeiro, talvez seja possível adicionarmos um item passando um novo índice e os dados que ele recebe:*/

$contasCorrentes[12345637811] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

//Se executarmos php foreach.php no terminal, a nova conta será adicionada com sucesso. Voltando ao nosso exemplo em listas.php...

$idadeList = [21, 23, 19, 25, 30, 41, 18];

/*...como adicionaríamos um novo item ao final dela? Será que precisaríamos contar o número de elementos para, 
então, adicionar um novo no índice 7?*/

$idadeList = [21, 23, 19, 25, 30, 41, 18];

$idadeList[7] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}

/*Dessa forma, estaremos adicionando o valor 20 ao índice 7 de $idadeList, exibindo em seguida cada uma das idades dessa lista. 
Executando php listas.php, esse valor aparecerá corretamente assim como esperávamos. Mas e se não soubéssemos 
a quantidade de itens nesse array?

Uma solução é utilizarmos o count():*/

$idadeList = [21, 23, 19, 25, 30, 41, 18];

$idadeList[count($idadeList)] = 20;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
/*Dessa forma, o count() retornará o mesmo valor que o índice vazio, permitindo a adição do novo item. 
Apesar de funcionar, isso não parece muito inteligente. Deve existir uma forma de simplesmente adicionarmos um item ao primeiro
 índice vazio da lista...e o PHP nos fornece isso. Se não informarmos um índice na adição, o PHP adicionará o item no próximo índice:*/

$idadeList[] = 20;

//E o que acontece se fizermos o mesmo processo em $contasCorrentes? Vamos testar, exibindo na tela o $cpf e $conta['titular']:

$contasCorrentes[] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}

/*Dessa forma, teremos um retorno como esse:

12345678910 Vinicius

12345678911 Maria

12325678912 Alberto

12345678912 Claudia*/

/*O PHP pegou o maior índice da lista (12345678911) e adicionou mais um, chegando ao índice 12345678912. Se adicionarmos mais um item 
na lista...*/

$contasCorrentes[] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes[] = [
    'titular' => 'Claudia 2',
    'saldo' => 2002
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
/*...teremos como retorno:

12345678913 Claudia 2*/

/*Ou seja, novamente foi adicionado 1 ao maior índice da lista. Mas e se ao invés de simplesmente passarmos os números,
 nós passássemos uma string formatada como um CPF propriamento dito?*/

    /*'123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
    ];*/


$contasCorrentes[] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

$contasCorrentes[] = [
    'titular' => 'Claudia 2',
    'saldo' => 2002
];


foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . " " . $conta['titular'] . PHP_EOL;
}
/*Nesse caso, o PHP não lerá nossos índices como números, mas sim como texto. E a partir disso, para adicionar um novo índice...

123.456.789-10 Vinicius

123.456.789-11 Maria

123.256.789-12 Alberto

0 Claudia

1 Claudia 2*/

//...o PHP criará novos índices numéricos a partir do 0, já que ele é o primeiro disponível. Assim, se tivermos um array associativo no qual as chaves possuem algum significado, precisamos dessa chave sempre que adicionarmos um novo item de modo que a lista continue fazendo sentido. Ou seja, nesse caso, precisaríamos adicionar o CPF:

$contasCorrentes['123.258.852-12'] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

/*123.456.789-10 Vinicius

123.456.789-11 Maria

123.256.789-12 Alberto

123.258.852-12 Claudia*/