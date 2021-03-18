<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

// Autoloader
spl_autoload_register(function ($class_name) {
    require 'class/'.$class_name . '.php';
});

$titulaire1 = new Titulaire("Mickael", "MURMANN", "1985-01-17", "STRASBOURG");
$c1 = new Compte("Livret A", 3000, "€", $titulaire1);
$c2 = new Compte("Compte courant", 1500, "€", $titulaire1);

$titulaire2 = new Titulaire("Virgile", "GIBELLO", "1984-01-16", "STRASBOURG");
$c3 = new Compte("Compte courant", 3000, "€", $titulaire2);

echo $titulaire1->afficherInfos();
$c1->virement($c2, 100);
$c1->virement($c3, 500);
echo $titulaire1->afficherInfos();
echo $titulaire2->afficherInfos();

?>

<script>
    let titulaires = document.querySelectorAll('.titulaire')
    titulaires.forEach((titulaire) => {
        titulaire.addEventListener('click', function (event) {  
            event.preventDefault()
            titulaire.style.backgroundColor = "red"
        }, false);
    })
</script>
</body>
</html>
