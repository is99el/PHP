<?php

include_once ('liedje.php');
include_once ('programma.php');

$ditprogramma = new Programma();
$ditprogramma->setNaam("mijn eerste programma");
$ditprogramma->setOmschrijving('Even testen');

foreach($ditprogramma->getProgramma() as $p) {
//    echo $p . "<br>";
}
    $nieuwliedje = new Liedje();
$nieuwliedje ->setTitel('dit is de titel');
$nieuwliedje ->setArtiest('rolling stones');
     $ditprogramma->voegLiedje($nieuwliedje);


foreach($ditprogramma->getLiedjes() as $liedje) {
    echo $liedje->getTitel() . "-".$liedje-> getArtiest();
}