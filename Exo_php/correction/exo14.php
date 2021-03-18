<h1>Exercice 14</h1>
<p>Calculer l'âge exact d'une personne à partir de sa date de naissance (en années, mois, jours).</p>

<h2>Résultat</h2>

<?php

$dateActuelle = new DateTime(); // date et heure du jour
$dateNaissance = new DateTime("1985-01-17");
$dateActuelle->setTimeZone(new DateTimeZone('Europe/Paris'));
// echo $dateActuelle->format("d-m-Y H:i");
$interval = $dateNaissance->diff($dateActuelle);
echo "La personne née le ". $dateNaissance->format("d/m/Y")." a ".$interval->format("%y ans %m mois %d jours");