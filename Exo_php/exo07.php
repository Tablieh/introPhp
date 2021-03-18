<h1> EXERCICE 7 </h1>
<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin: entre 6 et 7 ansPupille: entre 8 et 9 ansMinime: entre 10 et 11 ansCadet: à partir de 12 ansSi la catégorie n’est pas gérée, merci de le précise<br>
Affichage:L’enfant qui a 10 ans appartient à la catégorie « Minime »
</p>
<h2>Résultat</h2>
<?php
      function age($nbr) {
        if($nbr>=6 && $nbr<=7)
        {
            echo "L'enfant qui a "." ". $nbr." "." ans appartient à la catégorie"." "."<< Poussin>>"."<br>";
        }
        else if($nbr >= 8 && $nbr <= 9)
        {
            echo "L'enfant qui a  "." ".$nbr." "."  ans appartient à la catégorie"." "."<< pupille>>"."<br>";
        }
        else if($nbr >= 10 && $nbr <= 11)
        {
            echo "L'enfant qui a  "." ".$nbr." "."  ans appartient à la catégorie"." "."<< Minime>>"."<br>";
        }
        else if($nbr >= 12)
        {
            echo "L'enfant qui a  "." ".$nbr." "."  ans appartient à la catégorie"." "."<< Cadet >>"."<br>";
        }
        else
        {
            echo "Si la catégorie n’est pas gérée, merci de le préciser.";
        }
        }
        age(10);
        age(6);
        age(7);
        age(15);
        age(5);
?>