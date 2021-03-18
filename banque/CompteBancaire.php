<?php
class CompteBancaire{
    //atribus
    private $_libelle;
    private $_soldeInitial;
    private $_deviseMonetaire;
    private $_titulaireUnique;
   
    //constructeur
    public function __construct($libelle ="inconnu", $soldeInitial = 0.0, $deviseMonetaire=" ", $titulaireUnique=null)
    {
        $this-> _libelle =  $libelle;
        $this->_soldeInitial = $soldeInitial;
        $this->_deviseMonetaire = $deviseMonetaire;
        $this->_titulaireUnique = $titulaireUnique;
        $titulaireUnique->ajoutercompte($this);
    
    }
    //getter&setter
    

 
    public function getLibelle()
    {
        return $this->_libelle;
    }

    public function setLibelle($_libelle)
    {
        $this->_libelle = $_libelle;

        return $this;
    }

    public function getSoldeInitial()
    {
        return $this->_soldeInitial;
    }

    public function setSoldeInitial($_soldeInitial)
    {
        $this->_soldeInitial = $_soldeInitial;

        return $this;
    }

    
    public function getDeviseMonetaire()
    {
        return  $this->_deviseMonetaire;
    }

    public function setDeviseMonetaire($_deviseMonetaire)
    {
        $this->_deviseMonetaire = $_deviseMonetaire;

        return $this;
    }

    public function geTitulaireUnique()
    {
        return $this->_titulaireUnique;
    }

    public function setTitulaireUnique($_titulaireUnique)
    {
        $this->_titulaireUnique = $_titulaireUnique;

        return $this;
    }
 
    public function Crediter($sommeArgent){
        $this->_soldeInitial +=$sommeArgent;
        
    }
    public function debiter($moinsargent){
        $this->_soldeInitial -=$moinsargent;
        
    }
    public function effectuerUnVirement($compte,$somme){
        $this->debiter($somme);
        $compte->Crediter($somme);
    }
    
    public function __toString()
    {
        return $this->getLibelle()."   ".$this->getSoldeInitial()."   ".$this->getDeviseMonetaire()."    ".
        $this->geTitulaireUnique()."<br/>";
    }
}
