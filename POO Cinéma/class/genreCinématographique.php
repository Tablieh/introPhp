<?php
class genreCinématographiqu extends PooCinema{
    private $_genreCinématographique;


    public function __construct(string $titre =" ",string $dateDeSortieEnFrance=" ",int $durée = 0 ,string $résumé=" ",string $genreCinématographique="")
    {
        parent::__construct($titre,$dateDeSortieEnFrance,$durée,$résumé);
        $this->_genreCinématographique =$genreCinématographique;
    }
    public function getGenreCinématographique()
    {
        return $this->_genreCinématographique;
    }
    public function setGenreCinématographique($_genreCinématographique)
    {
        $this->_genreCinématographique = $_genreCinématographique;

        return $this;
    }
    public function getInfos(){
        $result = "<div class='PooCinema'><h1>Informations de la Film $this</h1>
            titre  : ".$this->getTitre()."<br/>
            dateDeSortieEnFrance : ".$this->getDateDeSortieEnFrance()."<br/>
            genreCinématographique : ".$this->getgenreCinématographique()."<br/>
            durée : ".$this->getDurée()."<br/>
            résumé : ".$this->getRésumé()."<br/>";
            return $result;
    }
    public function __toString(){
        return $this->getTitre()." ".$this->getDateDeSortieEnFrance()."<br/>";
    }
}