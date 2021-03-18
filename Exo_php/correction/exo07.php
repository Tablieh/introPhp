<h1>Exercice 7</h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
<ul>
    <li>Poussin : entre 6 et 7 ans</li>
    <li>Pupille : entre 8 et 9 ans</li>
    <li>Minime : entre 10 et 11 ans</li>
    <li>Cadet : à partir de 12 ans</li>
    <li>Si la catégorie n’est pas gérée, merci de le préciser.</li>
</ul>
</p>

<h2>Résultat</h2>

<?php

$age = 14;
$cat = "";

// if($age >= 12) {
//     $cat = "Cadet";
// }else if($age >= 10){
//     $cat = "Minime";
// }

switch(true){
    case $age >= 12: $cat = "Cadet"; break;
    case $age >= 10: $cat = "Minime"; break;
    case $age >= 8 : $cat = "Pupille"; break;
    case $age >= 6 : $cat = "Poussin"; break;
    default : $cat = "Non gérée";
}

echo "Age de l'enfant : $age ans<br/>";
echo "L'enfant qui a $age ans appartient à la catégorie : $cat";

?>