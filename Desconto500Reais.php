<?php

class Desconto500Reais
{
    public function deconto(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.05;
        } else {
            return 0;
        }
    }
}
