<?php
class VoitureElec extends VoitureClassic {
//atribus

    private $_autonomie;
    //constructeur
    public function __construct(string $marque =" ",string $modèle=" ",int $autonomie = 0 )
    {
        parent::__construct($marque,$modèle);
        $this->_autonomie=$autonomie;
    }
    public function getAutonomie()
    {
        return $this->_autonomie;
    }
    public function setAutonomie($_autonomie)
    {
        $this->_autonomie = $_autonomie;

        return $this;
    }
    public function getInfos(){
        $result = "<div class='Voiture'><h1>Informations de la Voiture $this</h1>
            Nom et Modéle du véhicule : ".$this->getMarque()." ".$this->getModèle()."<br/>
            Autonomie : ".$this->getAutonomie()."<br/>";
            return $result;
    }
    public function __toString(){
        return $this->getMarque()." ".$this->getModèle()."<br/>";
    }
}