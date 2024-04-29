<?php
abstract class Aldeano implements Recolector
{
    use PuedoRecolectar;
    
    private $velocidadRecoleccion;
    protected $bonus = 0;

    public function __construct(){
        $this->velocidadRecoleccion = 18;
    }

    public function getVelocidadRecoleccion(): int
    {
        return $this->velocidadRecoleccion;
    }

    public function recolectar(Recolectable $recolectable): void {
        
        $this->recolectarConBonus($recolectable);
    }

    public function setBonus(float $bonus){
        $this->bonus = $bonus;
    }
}

