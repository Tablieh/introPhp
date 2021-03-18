<h1> EXERCICE 2 </h1>
<p>Soit le tableau suivant :
$capitales = array
("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays
s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une
fonction personnalisée.
Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales)</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo2</title>
    
</head>
<body>
<?php
     

     $capitales =["France"=>"Paris",
                 "Allemagne"=>"Berlin",
                 "USA"=>"Washington",
                 "Italie"=>"Rome"];
         
         function AfficherTable($capitales)
         {
             ksort($capitales);
             echo "<table border='1'><thead><tr>
                                     <th style=bold>pays</th>
                                     <th style=bold>Capitale</th> </tr></thead><tbody>";
         foreach ($capitales as $pays => $capitale) {
             echo "<tr>
                     <td>".strtoupper($pays)."</td>
                     <td>".$capitale."</td>
                 </tr>";
         }
         echo "</tbody></table>";
        
         }
         echo AfficherTable($capitales);
     ?>
</body>
</html>

