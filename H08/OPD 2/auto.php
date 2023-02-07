<?php


class auto{

    private $naam='';
    private $autoos=array();


    /**
     * @param string $naam
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;
    }
    /**
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }
    public function voegAutoToe($auto){
        $this->autoos[]=$auto;
    }
    public function getAutos(){
        return $this->autoos;
    }




}