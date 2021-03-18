<?php
class Personne{
    //atribus
    private $_nompersonne;
    private $_prenompersonne;
    private $_dateNissance;
    
    //constructeur
    public function __construct($nompersonne ="inconnu",$prenompersonne="inconnu",$dateNissance="")
    {
        $this->_nompersonne = $nompersonne;
        $this->_prenompersonne = $prenompersonne;
        $this->_dateNissance = new DateTime($dateNissance);
    
    }
    //getter&setter
   
    public function getNompersonne()
    {
        return $this->_nompersonne;
    }

    public function setNompersonne($_nompersonne)
    {
        $this->_nompersonne = $_nompersonne;

        return $this;
    }

    public function getPrenompersonne()
    {
        return $this->_prenompersonne;
    }

   
    public function setPrenompersonne($_prenompersonne)
    {
        $this->_prenompersonne = $_prenompersonne;

        return $this;
    }
 
    public function getDateNissance()
    {
        return $this->_dateNaissance->format("d-m-Y");
    }

    public function setDateNissance($_dateNissance)
    {
        $this->_dateNissance = $_dateNissance;

        return $this;
    }
     
    public function getAge()
    {
        $dateActuelle = new DateTime(); // date et heure du jour
        $interval = $this->_dateNissance->diff($dateActuelle);
        return $interval->format("%y year");
    }

    public function __toString()
    {
        return $this->getNompersonne()." is the familyName and his name is ".$this-> getPrenompersonne().", he is ".
        $this->getAge()."<br/>";
    }

}
