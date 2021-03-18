<h1> EXERCICE 8 </h1>
<p>Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo8</title>
        
    </head>
    <body>
            <?php
            function repeterImage($image,$nb_fois)
            {
            ?>
            
                    <?php
                    $image="http://my.mobirise.com/data/userpic/764.jpg";
                        // Iterating through the product array
                        $i=1;
                        for( $i ; $i <= $nb_fois; $i++){
                    ?>
                        <?php
                        echo '<img src='.$image.' width="200" height="200"/>'
                        ?>
                    <?php
                    }
                    ?>
            
    
            <?php
            }
            $image="http://my.mobirise.com/data/userpic/764.jpg";
            repeterImage($image,4);
            ?>
    </body>   
</html>