<h1> EXERCICE 5 </h1>
<p>Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en précisant
le nom des champs associés.</p>
<h2>Résultat</h2>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo5</title>
    
</head>
<body>
   <form action="">
      <?php
               function Form()
               {
                  $nomsInput = array("Nom","Prénom","Ville");
                  
               foreach ($nomsInput as $Input => $InputN) {
                  echo "<label for='$InputN'>$InputN:</label>.</br>
                  
                  <input type='text' class='$InputN' required
                  minlength='4' maxlength='8' size='10'></br>";
               }
               
            
               }
               echo Form();
         ?>
     </form>
</body>
</html>