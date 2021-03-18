<h1>Exercice 12</h1>
<p>A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée (tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue respective (français => « Salut », anglais => « Hello », espagnol => « Hola »)</p>

<h2>Résultat</h2>

<?php


$personnes = ["Micka"=> "FRA", "Virgile"=>"ESP","MC"=>"ENG"];
$salutations = ["FRA" => "Salut", "ESP" => "Hola", "ENG" => "Hello"];

var_dump($personnes);
var_dump($salutations);

ksort($personnes); // tri de A à Z sur la clé (key, ici le prénom)
// krsort($personnes); // tri de Z à A sur la clé (key, ici le prénom)
// asort($personnes); // tri de A à Z sur la valeur (ici la langue)
// arsort($personnes); // tri de Z à A sur la valeur (ici la langue)

echo "<strong>Méthode switch..case</strong><br>";
foreach($personnes as $prenom => $langue){
    switch($langue){
        case "FRA": echo "Salut $prenom<br>"; break;
        case "ENG": echo "Hello $prenom<br>"; break;
        case "ESP": echo "Hola $prenom<br>"; break;
        default: echo "Langue non gérée pour $prenom<br>";
    }
    //echo "$prenom parle $langue<br>";
}


echo "<strong>Méthode 2 tableaux associatifs</strong><br>";
foreach ($personnes as $prenom => $langue) {
    if(in_array($langue, array_keys($salutations))){
        $bonjour = $salutations[$langue];
        // $salutations["FRA"] -> "Salut" 
        // $salutations["ESP"] -> "Hola" 
        echo "$bonjour $prenom<br>";
    }else{
        echo "Langue non gérée pour $prenom<br>";
    }
}

?>