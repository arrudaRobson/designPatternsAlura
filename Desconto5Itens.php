<?php

class Desconto5Itens
{
    public function deconto(Orcamento $orcamento)
    {
        private $proximoDesconto;

        if (conut($orcamento->getItens()) >= 5) {
            return $orcamento->getValor() * 0.1;
        } else {
            $this->proximoDesconto->desconto($orcamento);
        }
    }
}
