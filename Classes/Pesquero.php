<?php

class Pesquero implements Recolector
{
    use PuedoRecolectar;

    private $velocidadRecoleccion;

    public function __construct(){
        $this->velocidadRecoleccion = 18;
    }

    public function getVelocidadRecoleccion(): int {
        return $this->velocidadRecoleccion;
    }

  
}



