<h1>EXERCICE 1</h1>

<a href=".">Retour</a>

<p>Créer une fonction personnalisée <code>convertirMajRouge()</code> permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.</p>

<style>
    .red {
        color: red;
    }
</style>

<h2>Résultat</h2>

<?php

$texte = "Mon texte en paramètre";
echo convertirMajRouge($texte);
echo convertirMajColor($texte, "#009876");
echo convertirMajColor();

function convertirMajRouge(string $texte = "Aucun texte défini"){
    return "<p class='red'>".mb_strtoupper($texte)."</p>";
}

function convertirMajColor(string $texte = "Aucun texte défini", string $color = "black"){
    return "<p style='color:$color'>".mb_strtoupper($texte)."</p>";
}
