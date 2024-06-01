<?php

namespace Monique\SimpleFactory;

abstract class AbstractNotaFiscal
{
    protected $numero;

    /**
     * @param $numero
     */
    public function __construct($numero)
    {
        $this->numero = $numero;
    }
}