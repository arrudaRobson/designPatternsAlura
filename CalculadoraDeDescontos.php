<?php

require 'Desconto5Itens.php';
require 'Desconto500Reais.php';

class CalculadoraDeDescontos
{
    public function deconto(Orcamento $orcamento)
    {
       $desconto = new Desconto5Itens();
       $valorDesconto = $desconto->desconto($orcamento);

       if ($valorDesconto == 0) {
           $desconto = new Desconto500Reais();
           $valorDesconto = $desconto->desconto($orcamento);
       }

       return $valorDesconto;
    }
}
