<?php

require "Animal.php";
require "Marque.php";
require "Ordinateur.php";

// instanciant de 2 objet de la classe Animal
$chien = new Animal("chien","Haski",4,"2021-06-11");
$chat = new Animal("chat","siamois",4,"2019-03-14");

var_dump($chien);
var_dump($chat);
/*
echo $chien->getNomAnimal()."<br>";

echo $chien->getRace()."<br>";
echo $chien->getNbPattes()."<br>";
echo $chien->getDateNissance()."<br>";
//---------------------------
echo $chat->getNomAnimal()."<br>";
echo $chat->getRace()."<br>";
echo $chat->getNbPattes()."<br>";
echo $chat->getDateNissance()."<br>";
*/
echo $chien;
echo $chat;

$chien->manger("Croquettes");
$chien->manger("Viande");
$chat->manger("poisson");
$chien->attaquer($chat);
var_dump($chien);
var_dump($chat);

$asus = new Marque("ASUS", "Coree");
$ordinateur1 = new Ordinateur($asus, "765765", 16, "Intel i7");
$ordinateur2 = new Ordinateur($asus, "X400", 8, "Intel i9");
echo $asus."<br/>";
echo $ordinateur1;
echo $ordinateur2;

var_dump($ordinateur1);
var_dump($ordinateur2);