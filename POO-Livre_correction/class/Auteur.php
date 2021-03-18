<?php

class Auteur{

    private $prenom;
    private $nom;
    private $bibliographie;

    public function __construct(string $prenom = "", string $nom = ""){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->bibliographie = [];
    }

    public function getNom(){
        return $this->nom;
    }
    
    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }
    
    public function getPrenom(){
        return $this->prenom;
    }
    
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }
    
    public function getBibliographie(){
        return $this->bibliographie;
    }
    
    public function setBibliographie($bibliographie){
        $this->bibliographie = $bibliographie;
        return $this;
    }
    
    public function addLivre(Livre $livre){
        $this->bibliographie[] = $livre;
        //array_push()
    }

    public function afficherBibliographie(){
        $result = "<h1>Livres de $this</h1><ul>";
        foreach ($this->bibliographie as $livre) {
            $result .= "<li>$livre</li>";
        }
        $result .= "</ul>";
        return $result;
    }

    public function __toString(){
        return $this->prenom." ".$this->nom;
    }
}