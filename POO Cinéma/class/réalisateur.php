<?php
class réalisateur extends PooCinema{
    private $_réalisateur;


    public function __construct(string $titre =" ",string $dateDeSortieEnFrance=" ",int $durée = 0 ,string $résumé=" ",string $réalisateur=" ")
    {
        parent::__construct($titre,$dateDeSortieEnFrance,$durée,$résumé);
        $this->_réalisateur =$réalisateur;
    }
    public function getRéalisateur()
    {
        return $this->_réalisateur;
    }
    public function setRéalisateur($_réalisateur)
    {
        $this->_réalisateur = $_réalisateur;

        return $this;
    }
    public function getInfos(){
        $result = "<div class='PooCinema'><h1>Informations de la Film $this</h1>
            titre  : ".$this->getTitre()."<br/>
            dateDeSortieEnFrance : ".$this->getDateDeSortieEnFrance()."<br/>
            durée : ".$this->getDurée()."<br/>
            Réalisateur : ".$this->getRéalisateur()."<br/>
            résumé : ".$this->getRésumé()."<br/>";
            return $result;
    }
    public function __toString(){
        return $this->getTitre()." ".$this->getDateDeSortieEnFrance()."<br/>";
    }
}