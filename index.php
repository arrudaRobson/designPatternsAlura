<?php

require "Orcamento.php";
require "CalculadoraDeImpostos.php";
require 'Conta.php';
require 'Imposto.php';
require 'ICMS.php';
require 'ISS.php';
require 'KCV.php';
require 'ICCC.php';

$reforma = new Orcamento(1000);
$calculadora = new CalculadoraDeImpostos();

$conta = new Conta();
$conta->deposita(1000);

echo $calculadora->calcula($reforma, new ICMS());
echo "<br>";
echo $calculadora->calcula($reforma, new ISS());
echo "<br>";
echo $calculadora->calcula($reforma, new KCV());
echo "<br>";
echo $calculadora->calcula($reforma, new ICCC());
echo "<br>";
echo $conta->getSaldo();
