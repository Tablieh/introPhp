<h1> EXERCICE 10 </h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire
complet qui contient les informations suivantes : champs de texte avec nom, prénom, adresse e-mail,
ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation :
« Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».
Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de
validation (submit).

</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo10</title>
        
    </head>
    <body>
    <form>
    <?php
            function AfficherTable($tab1)
            {
                ksort($tab1);
                echo "<table border='1'><thead><tr>
                                        <th style=bold>elements</th>
                                        <th style=bold>valeur</th>
                                         </tr></thead><tbody>";
            foreach ($tab1 as $element => $chois) {
                echo "<tr>
                    <td>".$element."</td>
                    <td>".strtoupper($chois)."</td>
                    
                    </tr>";
            }
            echo "</tbody></table>";
           
            }
            
            function alimenterListechique($list)
            {
            ?>
                    <?php                
                    // Iterating through the product array
                    foreach($list as $element){
                    ?>
                    <form  method="post">
                    <?php echo ($element)?> :
                    <input type="checkbox" name="Id" value= <?php $element ?>/>
                    
                    </form>
                    <?php
                    }
                    ?>
                    <input type="submit" name="formSubmit" value="Submit" />
            <?php
            }
            ?>
    </form>
    <?php
    $tab1 =["Nom"=>"son",
            "Prénom"=>"Guko",
            "e-mail"=>"Dragonball1996@hotmail.com",
            "Ville"=>"animeLand",
            "sexe"=>"H"];
    $list=array("Designer web","Intégrateur","Chef de projet");
    echo AfficherTable($tab1);
    alimenterListechique($list);
    
    ?>
    </body>   
</html>