<h1> EXERCICE 6 </h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de
valeurs.</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo6</title>
        
    </head>
    <body>
            <?php
            function alimenterListeDeroulante($elements)
            {
            ?>
                <select>
                    <option selected="selected">Sélectionner une element</option>
                    <?php
                   
                    
                    // Iterating through the product array
                    foreach($elements as $element){
                    ?>
                    <option value= <?php echo strtolower($element); ?> > <?php echo $element; ?></option>
                    <?php
                    }
                    
                    ?>
                </select>
            
    
            <?php
            }
            $elements = array("Monsieur","Madame","Mademoiselle");
            alimenterListeDeroulante($elements);
            ?>
    </body>   
</html>