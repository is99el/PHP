<?php


class programmaAuto{

    private $merk='';
    private $type='';
    private $prijs='';
    private $url='';



    public function getprogrammaAuto(){
        return array('merk'=>$this->merk,'type'=>$this->type,'prijs'=>$this->prijs,'url'=>$this->url);
    }


    /**
     * @param string $merk
     */
    public function setMerk($merk)
    {
        $this->merk = $merk;
    }

    /**
     * @return string
     */
    public function getMerk()
    {
        return $this->merk;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $prijs
     */
    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;
    }

    /**
     * @return string
     */
    public function getPrijs()
    {
        return $this->prijs;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    public function geefGas(){

    }

    public function rem(){

    }


}