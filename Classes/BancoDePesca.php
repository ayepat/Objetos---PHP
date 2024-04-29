<?php

class BancoDePesca implements Recolectable
{
    use TengoComida;

    private $cantidadAlimento;

    public function __construct() {
        $this->cantidadAlimento = 225;
    }

    public function getAlimento(): int {
        return $this->cantidadAlimento;
    }
}

