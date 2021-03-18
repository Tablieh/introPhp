<h1> EXERCICE 15</h1>
<p>En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, vérifier si une adresse
e-mail a le bon format.
</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo15</title>
        
    </head>
    <body>
    <?php
    $emails=["elan@elan-formation.fr","contact@elan"];
    foreach ($emails as $email) {
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "L’adresse ".$email." est une adresse e-mail valide"."<br>";
            
        }
        else{
            echo "L’adresse ".$email." est une adresse e-mail invalide"."<br>";
        }
    }
    
    

    ?>
    </body>   
</html>