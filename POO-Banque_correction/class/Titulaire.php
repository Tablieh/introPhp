<?php

class Titulaire{

    private $prenom;
    private $nom;
    private $dateNaissance;
    private $ville;
    private $comptes;

    public function __construct(string $prenom = "", string $nom = "", string $dateNaissance = "now", string $ville = ""){
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->dateNaissance = new DateTime($dateNaissance);
        $this->ville = $ville;
        $this->comptes = [];
    }

    public function getPrenom(){
        return $this->prenom;
    }
 
    public function setPrenom($prenom){
        $this->prenom = $prenom;
        return $this;
    }

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
        return $this;
    }
 
    public function getDateNaissance(){
        return $this->dateNaissance->format("d-m-Y");
    }

    public function setDateNaissance($dateNaissance){
        $this->dateNaissance = $dateNaissance;
        return $this;
    }

    public function getComptes(){
        return $this->comptes;
    }

    public function setComptes($comptes){
        $this->comptes = $comptes;
        return $this;
    }

    public function getVille(){
        return $this->ville;
    }

    public function setVille($ville){
        $this->ville = $ville;
        return $this;
    }

    public function getAge(){
        return $this->dateNaissance->diff(new DateTime())->format("%Y"). " ans";
    }

    public function addCompte(Compte $c){
        $this->comptes[] = $c;
    }

    public function getSommeComptes(){
        $somme = 0;
        foreach($this->comptes as $compte){
            $somme += $compte->getSolde();
        }
        return $somme;
    }

    public function afficherInfos(){
        $result = "<div class='titulaire'><h1>Informations de $this</h1>
            Date de naissance : ".$this->getDateNaissance()."<br/>
            Age : ".$this->getAge()."<br/>
            Compte(s) : ".count($this->comptes)."<br/>
            Total : ".$this->getSommeComptes()."<br/><ul>";
        foreach($this->comptes as $compte){
            $result .= "<li>$compte</li>";
        }
        $result .= "</ul></div>";
        return $result;
    }

    public function __toString(){
        return $this->prenom." ".$this->nom;
    }
}