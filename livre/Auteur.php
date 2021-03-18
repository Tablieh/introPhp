<?php

class Auteur{
    //atribus
    private $_nome;
    private $_prenom;
    private $_livres;

    public function __construct($nome ="inconnu", $prenom="inconnu")
    {
        $this->_nome = $nome;
        $this->_prenom = $prenom;
        $this->_livres=[];
    }
    public function getNome()
    {
        return $this->_nome;
    }


    public function setNome($_nome)
    {
        $this->_nome = $_nome;

        return $this;
    }
    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }
    public function ajouterLivre($livres){
        $this->_livres[] = $livres;
        
    }
    public function afficherBibliographie(){
        $bibliographie = "Livres de $this<br/>";
        foreach ($this->_livres as $livre) {
            $bibliographie .= $livre."<br/>";
        }
        return $bibliographie;
    }
    public function __toString()
    {
      return $this->_nome." ".$this->_prenom;
    }
    
}