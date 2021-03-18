<?php

require "Animal.php";

// instanciation de 2 objets de la classe Animal
$chien = new Animal("Chien", "Golden", 4, "2019-06-11");
$chat = new Animal("Chat", "Siamois", 4, "2018-09-11");

var_dump($chien);
var_dump($chat);

echo $chien->getNomAnimal();

