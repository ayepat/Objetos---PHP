    <?php

class AldeanoChino extends Aldeano
{
    use PuedoRecolectar;

  

    public function __construct(){
        parent::__construct();
        $this->setBonus(0);
        
    }

    public function getBonus() : float {
        return $this->bonus;
    }
}
