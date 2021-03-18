<?php
class PooCinema{
//atribus
    private $_titre;
    private $_dateDeSortieEnFrance;
    private $_durée; //en minute
    private $_résumé;
    
    //constructeur
    public function __construct(string $titre =" ",string $dateDeSortieEnFrance=" ",int $durée = 0 ,string $résumé=" ")
    {
        $this->_titre = $titre;
        $this->_dateDeSortieEnFrance = new DateTime($dateDeSortieEnFrance);
        $this->_durée = $durée;
        $this->_résumé= $résumé;
        
    }
    public function getTitre()
    {
        return $this->_titre;
    }
    public function setTitre($_titre)
    {
        $this->_titre = $_titre;

        return $this;
    }
    public function getDateDeSortieEnFrance()
    {
        return $this->_dateDeSortieEnFrance->format("d-m-Y");
    }
    public function setDateDeSortieEnFrance($_dateDeSortieEnFrance)
    {
        $this->_dateDeSortieEnFrance = $_dateDeSortieEnFrance;

        return $this;
    }
    public function getDurée()
    {
        return $this->_durée;
    }
    public function setDurée($_durée)
    {
        $this->_durée = $_durée;

        return $this;
    }
   
    public function getRésumé()
    {
        return $this->_résumé;
    }
    public function setRésumé($_résumé)
    {
        $this->_résumé = $_résumé;

        return $this;
    }
    public function getInfos(){
        $result = "<div class='PooCinema'><h1>Informations de la Film $this</h1>
            titre  : ".$this->getTitre()."<br/>
            dateDeSortieEnFrance : ".$this->getDateDeSortieEnFrance()."<br/>
            durée : ".$this->getDurée()."<br/>
            résumé : ".$this->getRésumé()."<br/>";
            return $result;
    }
    public function __toString(){
        return $this->getTitre()." ".$this->getDateDeSortieEnFrance()."<br/>";
    }
   
}