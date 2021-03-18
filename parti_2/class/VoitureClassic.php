<?php
class VoitureClassic{
//atribus
    private $_marque;
    private $_modèle;
    //constructeur
    public function __construct(string $marque =" ",string $modèle=" " )
    {
        $this->_marque = $marque;
        $this->_modèle = $modèle;

    }
    public function getMarque()
    {
        return $this->_marque;
    }

    public function setMarque($_marque)
    {
        $this->_marque = $_marque;

        return $this;
    }

    public function getModèle()
    {
        return $this->_modèle;
    }

    public function setModèle($_modèle)
    {
        $this->_modèle = $_modèle;

        return $this;
    }

    public function getInfos(){
        $result = "<div class='Voiture'><h1>Informations de la Voiture $this</h1>
            Nom et Modéle du véhicule : ".$this->getMarque()." ".$this->getModèle()."<br/>";
            return $result;
    }
    public function __toString(){
        return $this->getMarque()." ".$this->getModèle()."<br/>";
    }
}