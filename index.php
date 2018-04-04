<?
    require "orcamento.php";
    require "calculadoraDeImpostos.php";
    require 'imposto.php';
    require 'icms.php';
    require 'iss.php';
    require 'kcv.php';

    $reforma = new Orcamento(500);
    $calculadora = new CalculadoraDeImpostos();

    echo $calculadora->calcula($reforma, new ICMS());
    echo "<br>";
    echo $calculadora->calcula($reforma, new ISS());
    echo "<br>";
    echo $calculadora->calcula($reforma, new KCV());

?>
