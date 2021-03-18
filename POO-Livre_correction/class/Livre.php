<?php

class Livre {

    private $titre;
    private $nbPages;
    private $annee;
    private $prix;
    private $auteur; // objet de la classe Auteur

    public function __construct(string $titre = "", int $nbPages = 0, int $annee = 0, float $prix = 0.00, Auteur $auteur = NULL) {
        $this->titre = $titre;
        $this->nbPages = $nbPages;
        $this->annee = $annee;
        $this->prix = $prix;
        $this->auteur = $auteur;
        $this->auteur->addLivre($this); // dès la construction du Livre, celui-ci s'ajoute automatiquement chez l'auteur concerné
    }

    public function getTitre(){
        return $this->titre;
    }

    public function setTitre($titre){
        $this->titre = $titre;
        return $this;
    }

    public function getNbPages(){
        return $this->nbPages;
    }

    public function setNbPages($nbPages){
        $this->nbPages = $nbPages;
        return $this;
    }

    public function getAnnee(){
        return $this->annee;
    }

    public function setAnnee($annee){
        $this->annee = $annee;
        return $this;
    }

    public function getPrix(){
        return $this->prix;
    }

    public function setPrix($prix){
        $this->prix = $prix;
        return $this;
    }

    public function __toString(){
        return $this->titre." (".$this->annee.") / ".$this->nbPages." pages - ".$this->prix." €<br/>";
    }
}