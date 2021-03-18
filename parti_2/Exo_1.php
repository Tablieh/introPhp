<h1> EXERCICE 1 </h1>
<p>Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne
de caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) </p>
<p>Affichage (si $texte = « Mon texte en paramètre »)
MON TEXTE EN PARAMETRE</p>
<h2>Résultat</h2>
<?php
    //exo 1
    //fuction de convert en Masjqule et et transfere le p en Rouge
    function convertirMajRouge($phrase){
        $phraseUperCase = mb_strtoupper($phrase);
       return  "<p  style='color:red'>$phraseUperCase</p>";
    }

$phrase = "Mon texte en parametre";
echo convertirMajRouge($phrase);
?>