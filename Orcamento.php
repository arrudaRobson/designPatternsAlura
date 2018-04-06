<?php

class Orcamento
{
    private $valor;
    private $itens;

    function __construct($novoValor)
    {
        $this->valor = $novoValor;
        $this->itens = array();
    }

    public function addIten(Item $novoItem)
    {
        $this->itens[] = $novoItem;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function getItens()
    {
        return $this->itens;
    }

}

