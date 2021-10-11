<?php

include 'Calculadora.php';
include 'Cachorro.php';

// $calculadora = new Calculadora();
//
// $resultado = $calculadora->somar(5,5);


// echo "O total é " . $calculadora->exibirTotal();



 $cachorro = new Cachorro();

 $cachorro->setNome("Bob");
 $cachorro->setDono("Adriano");
 $cachorro->setPatas(4);

 $cachorro->apresentar();

