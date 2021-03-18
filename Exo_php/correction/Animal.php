<?php

class Animal {

    // Attributs ou variables d'instance ou propriétés
    // portée de variables : public, protected et private
    private $_nomAnimal;
    private $_race;
    private $_nbPattes;
    private $_dateNaissance;
    private $_aliments;

    // Constructeur
    public function __construct($nomAnimal, $race, $nbPattes, $dateNaissance) {
        $this->_nomAnimal = $nomAnimal;
        $this->_race = $race;
        $this->_nbPattes = $nbPattes;
        $this->_dateNaissance = $dateNaissance;
        $this->_aliments = [];
    }

    // Getters (accesseurs) et setters (mutateurs)
    public function getNomAnimal(){
        return $this->_nomAnimal;
    }

    public function getRace(){
        return $this->_race;
    }

    public function getNbPattes(){
        return $this->_nbPattes;
    }

    public function getDateNaissance(){
        return $this->_dateNaissance;
    }

    public function setNomAnimal($nomAnimal){
        $this->_nomAnimal = $nomAnimal;
    }

    public function setRace($race){
        $this->_race = $race;
    }

    public function setNbPattes($nbPattes){
        $this->_nbPattes = $nbPattes;
    }

    public function setDateNaissance($dateNaissance){
        $this->_dateNaissance = $dateNaissance;
    }
}