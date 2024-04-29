<?php
require 'Interfaces/Recolectable.php';
require 'Interfaces/Recolector.php';

require 'Traits/PuedoRecolectar.php';
require 'Traits/TengoComida.php';

require 'Classes/Aldeano.php';
require 'Classes/Pesquero.php';
require 'Classes/Arbusto.php';
require 'Classes/BancoDePesca.php';
require 'Classes/AldeanoChino.php';
require 'Classes/AldeanoFranco.php';

// echo 'Aldeano: <br>';
// $aldeano = new Aldeano();
// $arbusto = new Arbusto();

// $aldeano->recolectar($arbusto);

echo 'Pesquero: <br>';
$pesquero = new Pesquero();
$bancoDePesca = new BancoDePesca();

$pesquero->recolectar($bancoDePesca);


echo 'Aldeano chino: <br>';
$aldeanoChino = new AldeanoChino();
$arbusto1 = new Arbusto();

$aldeanoChino->recolectar($arbusto1, $aldeanoChino->getBonus());

echo 'Aldeano franco: <br>';
$aldeanoFranco = new AldeanoFranco();
$arbusto2 = new Arbusto();

$aldeanoFranco->recolectar($arbusto2, $aldeanoFranco->getBonus() );

?>
