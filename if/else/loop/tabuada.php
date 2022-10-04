<?php

//minha tentativa que deu certo

	for ($contador=1; $contador <100; $contador +=2) {

		echo "$contador" . PHP_EOL;
	} 
	 echo PHP_EOL;

//outra forma

for ($contador=1; $contador <100; $contador++) {

	if ($contador % 2 != 0) {

		echo "$contador" . PHP_EOL;
	}

	
}
echo PHP_EOL;

//como eu fiz e deu certo

$mult = 2;
$resultado = 0;

for ($i = 0; $i <=10; $i++) {

	$resultado = $mult * $i;
	echo "$mult x $i=$resultado " . PHP_EOL;
} 
echo  PHP_EOL;

//outra forma

$multiplicador=5;

for ($i = 1; $i <=10; $i++) {

	echo "$multiplicador x $i = " . $multiplicador * $i . PHP_EOL;
}
echo PHP_EOL;

//forma mais correta

$multiplicador=5;

for ($i = 1; $i <=10; $i++) {

	$resultado = $multiplicador * $i;

	echo "$multiplicador x $i= $resultado" . PHP_EOL;

}
