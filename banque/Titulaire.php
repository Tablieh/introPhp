<?php
class Titulaire{
    //atribus
    private $_nom;
    private $_prenom;
    private $_dateDeNissance;
    private $_ville;
    private $_SesCompteBancaire;
    //constructeur
    public function __construct($nom ="inconnu", $prenom = "", $dateDeNissance=null, $ville="")
    {
        $this-> _nom =  $nom;
        $this->_prenom = $prenom;
        $this->_dateDeNissance = new DateTime($dateDeNissance);
        $this->_ville = $ville;
        $this->_SesCompteBancaire =[];
    
    }
    //getter&setter

    public function getNom()
    {
        return $this->_nom;
    }

    
    public function setNom($_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    
    public function getPrenom()
    {
        return $this->_prenom;
    }

   
    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }
 
    public function getDateDeNissance()
    {
        return $this->_dateDeNissance->format("d-m-Y");
    }

    
    public function setDateDeNissance($_dateDeNissance)
    {
        $this->_dateDeNissance = $_dateDeNissance;

        return $this;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function setVille($_ville)
    {
        $this->_ville = $_ville;

        return $this;
    }
     
    public function getAge()
    {
        $dateActuelle = new DateTime(); // date et heure du jour
        $interval = $this->_dateDeNissance->diff($dateActuelle);
        return $interval->format("%y Ans");
    }

    public function ajoutercompte($SesCompteBancaire){
        $this->_SesCompteBancaire[] = $SesCompteBancaire;
        
    }
    public function afficherBibliographie(){
        $bibliographie = "Compte de $this<br/>";
        foreach ($this->_SesCompteBancaire as $CompteBancaire) {
            $bibliographie .= $CompteBancaire."<br/>";
        }
        return $bibliographie;
    }
    
     
    public function __toString()
    {
    return $this->_nom."  ".$this->_prenom." ".$this->getAge()." ".$this->_ville;
    }
}