<?php

class Programma{
    private $naam='';
    private $omschrijving='';

    private $liedjes=array();



    public function voegLiedje($liedje){
        $this->liedjes[]=$liedje;
    }

    public function getLiedjes(){
        return $this->liedjes;
    }

    /**
     * Geeft programma informatie terug
     * @return mixed
     */
    public function getProgramma(){
        return array('naam'=>$this->naam,'omschrijving'=>$this->omschrijving);
    }
    /**
     * Geeft het programma een naam
     * @param de naam asl string
     */

    public function setNaam($n){
        if (strlen($n)>2){
            $this->naam=$n;
        }
    }
    /**
     * Geeft het programma een omschrijving
     * @param de omschrijving als string
     *
     */
    public function setOmschrijving($omschrijving){
        $this->omschrijving=$omschrijving;
    }
    /**
     * Retourneet naam van het programma
     * @param de omschrijving als string
     */
    public function getNaam(){
        return $this->naam;
    }
    /**
     *Retourneert omschrijving van het programma
     * @param de omschrijving als string
     */
    public function getOmschrijving(){
        return $this->omschrijving;
    }
}
