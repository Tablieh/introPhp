<?php

class Compte{

    private $libelle;
    private $solde;
    private $devise;
    private $titulaire;

    public function __construct(string $libelle = "N/A", float $solde = 0.00, string $devise = "€", Titulaire $titulaire = NULL) {
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $this->titulaire->addCompte($this);
    }

    public function getLibelle(){
        return $this->libelle;
    }

    public function setLibelle($libelle){
        $this->libelle = $libelle;
        return $this;
    }

    public function getSolde(){
        return $this->solde;
    }

    public function setSolde($solde){
        $this->solde = $solde;
        return $this;
    }
 
    public function getDevise(){
        return $this->devise;
    }

    public function setDevise($devise){
        $this->devise = $devise;
        return $this;
    }

    public function getTitulaire(){
        return $this->titulaire;
    }

    public function setTitulaire($titulaire){
        $this->titulaire = $titulaire;
        return $this;
    }

    public function crediter($montant){
        $this->solde += $montant; // $this->solde = $this->solde + $montant;
    }

    public function debiter($montant){
        $this->solde -= $montant;
    }

    public function virement(Compte $compteCible, float $montant){
        $this->debiter($montant);
        $compteCible->crediter($montant);
        echo "<p style='color:red'>Un virement de $montant € a été effectué !</p>
            Compte source : ".$this->getLibelle()." (".$this->getTitulaire().")<br/>
            Compte cible : ".$compteCible->getLibelle()." (".$compteCible->getTitulaire().")<br/>";
    }

    public function __toString(){
        return $this->libelle." - Solde : ".$this->solde." ".$this->devise."<br/>";
    }
}