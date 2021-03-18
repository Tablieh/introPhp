<?php
class Poolivre{
    //atribus
    private $_titre;
    private $_nbDePages;
    private $_anneeDeParution;
    private $_prix;
    private $_auteur;
    //constructeur
    public function __construct($titre ="inconnu", $nbDePages = 0, $anneeDeParution="", $prix=0, $auteur)
    {
        $this->_titre = $titre;
        $this->_nbDePages = $nbDePages;
        $this->_anneeDeParution = $anneeDeParution;
        $this->_prix = $prix;
        $this->_auteur = $auteur;
        $this->_auteur->ajouterLivre($this);
    
    }
    //getter&setter
    public function getTitre()
    {
        return $this->_titre;
    }

    
    public function setTitre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }

    public function getNbDePages()
    {
        return $this->_nbDePages;
    }

    public function setNbDePages($_nbDePages)
    {
        $this->_nbDePages = $_nbDePages;

        return $this;
    }
 
    public function getAnneeDeParution()
    {
        return $this->_anneeDeParution;
    }

    public function setAnneeDeParution($_anneeDeParution)
    {
       
        $this->_anneeDeParution = $_anneeDeParution;

        return $this;
    }
    public function getPrix()
    {
        return $this->_prix;
    }

  
    public function setPrix($_prix)
    {
        $this->_prix = $_prix;

        return $this;
    }
    
    

    public function getAuteur()
    {
        return $this->_auteur;
    }

 
    public function setAuteur($_auteur)
    {
        $this->_auteur = $_auteur;

        return $this;
    }
    public function __toString()
    {
      return $this->getTitre()." ( ".$this->getAnneeDeParution().") : ".$this->getNbDePages()." pages /".$this->getPrix()." € ";
    }
}
