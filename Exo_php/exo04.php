<h1> EXERCICE 4 </h1>
<p>Ecrire un algorithme permettant de savoir si une phrase est palindrome. <br>
Affichage:La phrase «Engage le jeu que je le gagne» est palindrome
</p>
<h2>Résultat</h2>
<?php
    $phrase2 = "Engage le jeu que je le gagne";

    $cleanPhrase = str_replace(" ", "",$phrase2);
    $cleanPhrase1=strtoupper($cleanPhrase);

    $invertPhrase = strrev($cleanPhrase1);

    if($cleanPhrase1 === $invertPhrase)
        echo "La phrase « ".$phrase2." » est un palindrome";
    else
        echo "La phrase « ".$phrase2." » n'est pas un palindrome";
    
?>