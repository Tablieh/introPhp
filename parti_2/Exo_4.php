<h1> EXERCICE 4 </h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le
lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel
onglet et le tableau sera trié par ordre alphabétique de la capitale).
On admet que l’URL de la page Wikipédia de la capitale adopte la forme :
https://fr.wikipedia.org/wiki/
Le tableau passé en argument sera le suivant :
$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid")</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
    
</head>
<body>
<?php
     

     $capitales =["France"=>"Paris",
                 "Allemagne"=>"Berlin",
                 "USA"=>"Washington",
                 "Italie"=>"Rome"];
         
         function AfficherTable($capitales)
         {
             asort($capitales);
             echo "<table border='1'><thead><tr>
                                     <th style=bold>pays</th>
                                     <th style=bold>Capitale</th>
                                     <th style=bold>Lien Wiki</th> </tr></thead><tbody>";
         foreach ($capitales as $pays => $capitale) {
             echo "<tr>
                     <td>".strtoupper($pays)."</td>
                     <td>".$capitale."</td>
                     <td>.<a style='color:skyblue'href='https://fr.wikipedia.org/wiki/$capitales' target='_blank'>Wikipédia</a>.</td>
                 </tr>";
         }
         echo "</tbody></table>";
        
         }
         echo AfficherTable($capitales);
     ?>
</body>
</html>