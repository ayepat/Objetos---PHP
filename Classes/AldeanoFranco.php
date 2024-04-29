
<?php

class AldeanoFranco extends Aldeano
{
    use PuedoRecolectar;

    public function __construct(){
        parent::__construct();
        $this->setBonus(0.25);
          
    }


    public function getBonus() : float {
        return $this->bonus;
    }

   
}
