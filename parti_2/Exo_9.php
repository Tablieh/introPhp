<h1> EXERCICE 9 </h1>
<p>Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de valeurs
en paramètre ("Monsieur","Madame","Mademoiselle").

</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo9</title>
        
    </head>
    <body>
    <?php
            function afficherRadio($nomsRadio)
            {
            ?>
                    <?php
                    

                    foreach($nomsRadio as $elem ){
                    ?>
                    <form  method="post">
                    <?php echo ($elem)?> :
                    <input type="radio" name="Id" value= <?php $elem ?>/>
                   
                    </form>
                    <?php
                    }
                    ?>
                    <input type="submit" name="formSubmit" value="Submit" />
                    
            
    
            <?php
            }
            $elements  =["Masculin",
                    "Feminin",
                    "Autre"];
            afficherRadio($elements);
            ?>
    </body>   
</html>