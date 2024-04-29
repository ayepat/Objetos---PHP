<?php

trait PuedoRecolectar
{
    public function recolectar(Recolectable $recolectable, $bonus = 0): void {
        // cantidad de alimento
        $cantidadRecolectada = $recolectable->getAlimento();
        
        // velocidad de recolección de la clase que utiliza el trait
        $velocidadRecoleccion = $this->getVelocidadRecoleccion();

        // Calcular la velocidad de recolección con el bonus
        if ($this instanceof Aldeano) {
            $bonus = $this->getBonus();
            $velocidadRecoleccionConBonus = $velocidadRecoleccion * (1 + $bonus);
        } else {
            $velocidadRecoleccionConBonus = $velocidadRecoleccion;
        }

        // Calcular el tiempo de recolección
        $tiempo = ceil($cantidadRecolectada / $velocidadRecoleccionConBonus);

        echo 'Recolecté todo el alimento en ' . $tiempo . ' minutos.<br>';
    }
}




