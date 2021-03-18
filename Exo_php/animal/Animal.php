<?php
class Animal{
    //atribus
    private $_nomAnimal;
    private $_race;
    private $_nbPattes;
    private $_dateNissance;
    private $_aliments;
    private $_pointsDeVie;
    
    //constructeur
    public function __construct($nomAnimal ="inconnu",$race="inconnu",$nbPasttes =0 ,$dateNissance="")
    {
        $this->_nomAnimal = $nomAnimal;
        $this->_race = $race;
        $this->_nbPattes = $nbPasttes;
        $this->_dateNaissance = new DateTime($dateNissance);
        $this->_aliments = [];
        $this->_pointsDeVie = 100;
    }
    //getter&setter
    public function getNomAnimal(){
        return $this->_nomAnimal;
    }
    public function getRace(){
        return $this->_race;
    }
    public function getNbPattes(){
        return $this->_nbPattes;
    }
    public function getDateNissance(){
        return $this->_dateNaissance->format("d-m-Y");
    }
    public function setNomAnimal($nomAnimal){
        $this->_nomAnimal = $nomAnimal;
    }
    public function setRace($race){
        $this->_race = $race;
    }
    public function setNbPattes($nbPasttes){
        $this->_nbPattes = $nbPasttes;
    }
    public function setDateNissance($dateNissance){
        $this->_dateNaissance = $dateNissance;
    }
    public function getPointsDeVie(){
        return $this->_pointsDeVie;
    }
    public function manger($aliment){
        $this->_aliments[] = $aliment;
        //array_push($this->_aliments,$aliments);
    }
    public function attaquer(Animal $animal){
        $this->_pointsDeVie = $this->_pointsDeVie + 2;
        $animal->_pointsDeVie = $animal->_pointsDeVie - 2;
        echo $this->getNomAnimal()." a ".$this->getPointsDeVie()." points de vie <br/>";
        echo $animal->getNomAnimal()." a ".$animal->getPointsDeVie()." points de vie <br/>";
    }
    public function __toString()
    {
        return $this->getNomAnimal()." est de race ".$this->getRace().", possede ".
        $this->getNbPattes()." pattes et est ne le ".$this->getDateNissance()."<br/>";
    }
}