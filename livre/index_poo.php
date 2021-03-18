<?php
require "Poolivre.php";
require "Auteur.php";
$name = new Auteur("King ","Stephan");
$book1 = new Poolivre("ca",1138,"1986",20,$name);
$book2 = new Poolivre("simetierre",374,"1983",15,$name);
$book3 = new Poolivre("Le Fleau",823,"1978",14,$name);
$book4 = new Poolivre("Shining",447,"1977",16,$name);

//var_dump($book1);

echo $name->afficherBibliographie();