<?php

class Ordinateur{
    private $_marque;
    private $_modele;
    private $_ram;
    private $_processeur;

    public function __construct(Marque $marque, string $modele="", int $ram = 0, string $processeur = "")
    {
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_ram = $ram;
        $this->_processeur = $processeur;
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

    public function getModele()
    {
        return $this->_modele;
    }

    
    public function setModele($_modele)
    {
        $this->_modele = $_modele;

        return $this;
    }

   
    public function getRam()
    {
        return $this->_ram;
    }

    public function setRam($_ram)
    {
        $this->_ram = $_ram;

        return $this;
    }

    public function getProcesseur()
    {
        return $this->_processeur;
    }

    public function setProcesseur($_processeur)
    {
        $this->_processeur = $_processeur;

        return $this;
    }
    public function __toString()
    {
        return "L'ordinateur ".$this->getMarque(). " ".$this->getModele()." a une memoire
        vive de ".$this->getRam()." Go, avec un processeur ".$this->getProcesseur()."<br/>";
    }
}