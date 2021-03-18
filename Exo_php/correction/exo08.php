<h1>Exercice 8</h1>
<p>Ecrire un algorithme qui renvoie la table de multiplication d’un nombre passé en paramètre</p>

<h2>Résultat</h2>

<?php

$table = 8;

// Méthode FOR
echo "<h3>Avec FOR</h3>";
for ($i=1; $i <= 10; $i++) { 
    echo "$i x $table = ". $i * $table . "<br>";
}

// METHODE WHILE
echo "<h3>Avec WHILE</h3>";
$i = 1;
while ($i <= 10){
    echo "$i x $table = ". $i * $table . "<br>";
    $i++;
}

// METHODE FOREACH
foreach (range(1,10) as $nb) {
    echo "$nb x $table = ". $nb * $table . "<br>";
}

?>