<h1> EXERCICE 11 </h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une
chaîne de caractère représentant une date.
</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo11</title>
        
    </head>
    <body>
    <?php
            // To set french date format
            function formaterDateFr($date){
                if($date==NULL){ 
                    $date = date('Y-m-d');
                }
                setlocale(LC_ALL, 'fr_FR.UTF-8').': ';
                return strftime( "%A %d %B %Y" , strtotime($date));
            }
            /*
            return date francais
            */
            ?>
    
    <?php
    $date="2018-02-23";
    echo(formaterDateFr($date));
    ?>
    </body>   
</html>