<?php

include_once ('programmaAuto.php');
include_once ('auto.php');


$autoprogramma= new programmaAuto();

    $autoprogramma->setMerk("");
    $autoprogramma->setType('');

    foreach($autoprogramma->getprogrammaAuto() as $p) {
    echo $p . "<br>";
    }

$nieuwauto = new auto();
$nieuwauto ->setNaam('');
$nieuwauto->voegAutoToe($nieuwauto);



foreach($nieuwauto->getAutos() as $auto) {
    echo $auto->getNaam() . "-";
}




