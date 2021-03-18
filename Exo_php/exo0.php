<?php

// CAMEL CASE (1ère en minuscule, première lettre de chaque mot en majuscule)

$chaineDeCaracteres = "mon texte évident"; // string
$entier = 20; // integer
$flottant = 29.99; // float
$booleen = true; // ou false - boolean
$tableau1 = array("valeur 1", "valeur 2", "valeur 3");
$tableau2 = ["valeur 1", "valeur 2", "valeur 3"]; // array
$date = new DateTime(); // objet de la classe DateTime (classe native de PHP permettant de manipuler des dates)

echo $chaineDeCaracteres."<br/>"; // . = concaténation
echo $entier."<br/>";
echo "$chaineDeCaracteres<br/>$entier<br/>";

// var_dump($booleen); // debug
echo mb_strtoupper($chaineDeCaracteres)."<br/>"; // conversion en majuscules

$texte = "mon autre texte";
echo str_word_count($texte)."<br/>"; // compte le nombre de mots
echo strlen($texte)."<br/>"; // compte le nombre de caractères
echo "Il y a ".count($tableau2)." éléments dans le tableau<br/>";
echo $date->format("d.m.Y")."<br/>";

echo gettype($chaineDeCaracteres)."<br/>"; // renvoie le type de la variable

$prixTTC = 9.99;
$quantite = 5;
$cost = "Mon article coûte";
echo "$cost $prixTTC €<br/>"; // echo $cost." ".$prixTTC." €";
$total = $prixTTC * $quantite;
echo "Le total est de ". $total . " €<br/>";

$pi = pi();
echo($pi)."<br/>";
echo round($pi, 2)."<br/>";

// CONDITIONNELLES

$prenom = "Georges";
$age = 25;

if($age >= 18) {
    echo "$prenom est majeur<br/>";
} else {
    echo "$prenom est mineur<br/>";
}

// Ternaire
// ? => alors    : => sinon
$reponse = ($age >= 18) ? "majeur" : "mineur"; 
echo "$prenom est $reponse<br/>";

echo "$prenom est ". ($age >= 18 ? "majeur" : "mineur")."<br/>";

// Jours de congés :
// 3 jours de congés pour les femmes qui ont 2 enfants ou plus
// 2 jours pour toutes les autres personnes
$sexe = "F";
$nbEnfants = 4;

if($sexe == "F" && $nbEnfants >= 2) {
    $nbJours = 3;
} else {
    $nbJours = 2;
}
echo "Le nombre de jours de congés est de $nbJours jours<br/>";

echo "Nombre de jours : ". ($sexe == "F" && $nbEnfants >= 2 ? 3 : 2);

$age=15;
switch($age){
    case 1: echo "trop jeune<br/>"; break;
    case 2: echo "toujour trop jeune<br/>"; break;
    default : echo "Age ok<br/>";
}
if($age == 1){
    echo "Trop jaune";
}elseif($age == 2){
    echo "toujour trop jeune<br/>";
}else{
    echo "Age ok<br/>";
}
// boucles 
// for : pour
// while : tant que
// foreach : pour chaque

//Afficher les chiffres de 1 a 10
for($i = 1; $i<= 10; $i++){ //$i=$i+1
echo $i."<br/> ";
}
echo "<br/>";

$i=1;
while($i<=10){
    echo $i." ";
    $i++;
}
echo "<br/>";

foreach(range(1,10) as $nb){ 
    echo $nb." ";
}
echo "<br/>";
$tableauClients = ["virgile", "stephane", "Micka"];
echo $tableauClients[1]."<br/>"; //affiche le 2em elment de tableau 

echo "<br/>";


for($i = 0; $i < count($tableauClients); $i++){
    echo $tableauClients[$i]."<br/>";
}
echo "<br/>";

$j = 0;
while($j < count($tableauClients)){
    echo $tableauClients[$j]."<br/>";
    $j++;
}
echo "<br/>";

asort($tableauClients); //tri de tableau ASC
//arsort($tableauClients); //tri de tableau dans l orde alphabitque DECS 
foreach($tableauClients as $client){
    echo $client."<br/>";
}
echo "<br/>";

//Tableaux assciotifs : cle => avaleur

$tabAssociattif = [
    "virgile" => "strasbourg",
    "stephane" => "paris",
    "Micka" => "strasbourg"

];
// as $cle =>$valeur
foreach($tabAssociattif as $prenom => $ville){
    echo ucfirst($prenom)." habite a ".mb_strtoupper($ville)."<br/>";
}
echo "<br/>";

//afficher la ville de stephane
echo $tabAssociattif["virgile"]."<br/>";
echo "<br/>";

$clients = [
    "virgile" => [
        "adresse" => "10 rue de la Gare ",
        "cp" => "67000",
        "ville" => "STRASBOURG"
    ],

    "Micka" => [
        "adresse" => "14 avenue de la charents ",
        "cp" => "67200",
        "ville" => "STRASBOURG"
    ]
];
var_dump($clients);
;
echo "<br/>";

echo $clients["virgile"]["adresse"]."<br/>";
;
echo "<br/>";

foreach($clients as $client){
    echo $client["adresse"]."<br/>";

}
echo "<br/>";

// Fonctions
echo afficherMessage();
function afficherMessage(){
    $message = "Voici mon massage<br/>";
    return $message;
}
echo "<br/>";

echo "le carre de 3 est : ".calculerCarre(3);
function calculerCarre($number){
    $carre = pow($number, 2);
    return $carre;
}
echo "<br/>";

$prixHT=115;
// $prixHT=113545645;
$tva=0.20; //20% iva
echo "le prix TTC de cet article est de : ".calculerPrixTTC($prixHT,$tva)." €<br/>";

function calculerPrixTTC($prixHT,$tva){
    // A trouve : 138 euro
    $prixTTC = $prixHT + $prixHT*$tva;
    //$prixTTC = $prixHT * (1+$tva);
    //return round($prixTTC,2); les decimales .00 ne saffichent pas
    return number_format($prixTTC, 2, ",", " ");
}
echo "<br/>";

// afficher de le nombre de mots et le nombre de lettre (sans les espaces dans une phrase)

$phrase = "Ma formation est top";
echo compterMotsEtLesttre($phrase);

function compterMotsEtLesttre($phrase){
// resultat : 4 mots et 17 lettre 

$mots= str_word_count($phrase);
$lettre= strlen($phrase) - substr_count($phrase, " ");
 return "Il y a $mots et $lettre lettres (sans les espace) dans la phrase<br/>";
}
echo "<br/>";

$nombre = 14;
echo "Le nombre $nombre est ".pairOuImpaire($nombre);
echo "<br/>";
function pairOuImpaire($nombre){
    $rep = ($nombre % 2 == 0) ? "pair" : "impair";
    return $rep;
}
// function pairOuImpaire($nombre){
 //   if($nombre % 2 == 0){
  //      $rep = "pair";
  //  }else{
      //  $rep = "impair";
  //  }
  //  return $rep;
 // }
 echo repeterMot("Hourra", 5);
 echo "<br/>";
 function repeterMot($mot, $nb){
     $res = "";
     for($i=1;$i<=$nb;$i++){
         $res .=$mot."";
     }
     return $res;
 }
 echo repeterMot2("hello",5);
 echo "<br/>";
 function repeterMot2($mot, $nb){
     return str_repeat($mot." ",$nb);
 }





