<?php

require('Carro.php');

$veiculo = new Carro;

$veiculo->setModelo('civic');
$veiculo->setMarca('honda');
$veiculo->setAno('2007');
$veiculo->setAlarme('sim');
$veiculo->setCor('cinza');

$veiculo->getModelo();
$veiculo->getMarca();
$veiculo->getAno();
$veiculo->getAlarme();
$veiculo->getCor();

?>