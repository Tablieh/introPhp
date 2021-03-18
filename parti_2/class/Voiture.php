<?php
class Voiture{
//atribus
    private $_marque;
    private $_modèle;
    private $_nbPortes;
    private $_vitesseActuelle;
    private $_status;
    //constructeur
    public function __construct(string $marque =" ",string $modèle=" ",int $nbPortes = 0 )
    {
        $this->_marque = $marque;
        $this->_modèle = $modèle;
        $this->_nbPortes = $nbPortes;
        $this->_vitesseActuelle = 0;
        $this->_status= false;
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
   
    public function getNbPortes()
    {
        return $this->_nbPortes;
    }

    public function setNbPortes($_nbPortes)
    {
        $this->_nbPortes = $_nbPortes;

        return $this;
    }

    public function getVitesseActuelle()
    {
        return $this->_vitesseActuelle;
    }

    public function setVitesseActuelle($_vitesseActuelle)
    {
        $this->_vitesseActuelle = $_vitesseActuelle;

        return $this;
    }
    public function getStatus()
    {
        return $this->_status;
    }

    public function setStatus($_status)
    {
        $this->_status = $_status;

        return $this;
    }

    public function demarrer(){
        $this->_status=true;
    }
    
    public function stopper(){
        $this->_status=false;
        $this->_vitesseActuelle=0;
    }
    public function accelerer($vitesse){
       $this->_vitesseActuelle+=$vitesse;
    }
    public function ralentir($vitesse){
        $this->_vitesseActuelle-=$vitesse;
    }
    public function status(){
        if($this->_status==false){
            return "stopper";
        }
        else{
            return "demarrer";
        }
    }
    public function afficherstatus(){
        $result = "le véhicule : ".$this->getMarque()." ".$this->getModèle()." ".$this->Status()."<br/>";
            
            return $result;
    }
    public function afficherVitesseAcc(){
        $result = "le véhicule : ".$this->getMarque()." ".$this->getModèle()." accelerer de ".$this->getVitesseActuelle()."KM/H"."<br/>";
            
            return $result;
    }
    public function afficherVitesse(){
        $result = "la Vitesse du véhicule : ".$this->getMarque()." ".$this->getModèle()." accelerer de ".$this->getVitesseActuelle()." "."KM/H"."<br/>";
            
            return $result;
    }
    public function afficherPour(){
        if($this->_status==false&&$this->_vitesseActuelle=0){
            $result = "Pour arrete il faut stopper le véhicule".$this->getMarque()." ".$this->getModèle()." !"."<br/>";
        }
        else{
            $result = "Pour accelerer il faut demarrer le véhicule".$this->getMarque()." ".$this->getModèle()." !"."<br/>";
        }
        return $result;
    }
    public function afficherInfos(){
        $result = "<div class='Voiture'><h1>Informations de la Voiture $this</h1>
            Nom et Modéle du véhicule : ".$this->getMarque()." ".$this->getModèle()."<br/>
            Nombre de Portes : ".$this->getNbPortes()."<br/>
            le véhicule : ".$this->getMarque()." est ".$this->Status()."<br/>
            Sa VitesseActuelle : ".$this->getVitesseActuelle()." "."KM/H"."<br/>";
            
            return $result;
    }
    public function __toString(){
        return $this->getMarque()." ".$this->getModèle()."<br/>";
    }


    
    }