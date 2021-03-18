<?php
class Personage extends PooCinema{
    private $_nomtDeActeurs;
    private $_prénomtDeActeurs;
    private $_sexeDeActeurs;
    private $_datedeNaissanceDeActeurs;
    private $_nomrôle;
    public function __construct(string $titre =" ", string $dateDeSortieEnFrance=" ", int $durée = 0 , string $résumé=" ", string $nomtDeActeurs =" ", string $prénomtDeActeurs =" ", string $sexeDeActeurs =" " , string $datedeNaissanceDeActeurs =" " , string $nomrôle =" " )
    {
        parent::__construct($titre,$dateDeSortieEnFrance,$durée,$résumé);
        $this->_nomtDeActeurs = $nomtDeActeurs;
        $this->_prénomtDeActeurs = $prénomtDeActeurs;
        $this->_sexeDeActeurs = $sexeDeActeurs;
        $this->_datedeNaissanceDeActeurs= new DateTime($datedeNaissanceDeActeurs);
    }

    public function getNomtDeActeurs()
    {
        return $this->_nomtDeActeurs;
    }
    public function setNomtDeActeurs($_nomtDeActeurs)
    {
        $this->_nomtDeActeurs = $_nomtDeActeurs;

        return $this;
    }
    public function getPrénomtDeActeurs()
    {
        return $this->_prénomtDeActeurs;
    }
    public function setPrénomtDeActeurs($_prénomtDeActeurs)
    {
        $this->_prénomtDeActeurs = $_prénomtDeActeurs;

        return $this;
    }
    public function getSexeDeActeurs()
    {
        return $this->_sexeDeActeurs;
    }
    public function setSexeDeActeurs($_sexeDeActeurs)
    {
        $this->_sexeDeActeurs = $_sexeDeActeurs;

        return $this;
    }
    public function getDatedeNaissanceDeActeurs()
    {
        return $this->_datedeNaissanceDeActeurs->format("d-m-Y");
    }
    public function setDatedeNaissanceDeActeurs($_datedeNaissanceDeActeurs)
    {
        $this->_datedeNaissanceDeActeurs = $_datedeNaissanceDeActeurs;

        return $this;
    }
    public function getNomrôle()
    {
        return $this->_nomrôle;
    }
    public function setNomrôle($_nomrôle)
    {
        $this->_nomrôle = $_nomrôle;

        return $this;
    }
      
    public function getActure(){
        $result = "<div class='PooCinema'><h1>Informations de ".$this->getprénomtDeActeurs()."</h1>
            NomtDeActeurs : ".$this->getNomtDeActeurs()."<br/>
            PrénomtDeActeurs : ".$this->getprénomtDeActeurs()."<br/>
            SexeDeActeurs() : ".$this->getSexeDeActeurs()."<br/>
            DatedeNaissanceDeActeurs : ".$this-> getDatedeNaissanceDeActeurs()."<br/>";
            return $result;
    }
    public function __toString(){
        return $this->getTitre()." ".$this->getDateDeSortieEnFrance()."<br/>";
    }

    
}