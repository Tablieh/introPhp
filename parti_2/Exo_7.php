<h1> EXERCICE 7 </h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans
le tableau associatif si la case est cochée ou non.</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo7</title>
        
    </head>
    <body>
            <?php
            function alimenterListechique($elements)
            {
            ?>
                    <?php
                    
                    
                    // Iterating through the product array
                    foreach($elements as $element=>$Id){
                    ?>
                    <form  method="post">
                    choix <?php echo ($element)?> :
                    <input type="checkbox" name="Id" value= <?php $element ?>/>
                    <input type="submit" name="formSubmit" value="Submit" />
                    </form>
                    <?php
                    }
                    
                    ?>
                </select>
            
    
            <?php
            }
            $elements = array("son_goku","vigita","kami");
            alimenterListechique($elements);
            ?>
    </body>   
</html>