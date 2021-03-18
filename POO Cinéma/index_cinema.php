<h1> Cinema Land </h1>
<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.</p>
<p>Les films seront identifiés par leur titre, leur date de sortie en France, leur durée (en minutes) ainsi que
leur réalisateur (unique, avec nom, prénom, sexe et date de naissance).<p>
</p>Un résumé du film (synopsis)
pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre
cinématographique (science-fiction, aventure, action, ...).</p> 
<p>
Votre application devra recenser également les acteurs de chacun des films. On désire connaître le
nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué
par l’acteur dans le(s) film(s) concerné(s).</p>
<p>Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de savoir où
le mettre en place !</p>
<p>Attention !</p>
</p>
<p>• Le rôle (par exemple "James Bond") ne doit être instancié qu'une seule fois (dans la mesure où
        ce rôle a été incarné par plusieurs acteurs)
        On doit pouvoir :</p>
<p>• Lister le casting d'un film (Dans Star Wars, Han Solo a été incarné par Harison Ford, Luke
Skywalker a été incarné par Mark Hamill, ...)</p>
<p>• Lister la liste des acteurs ayant incarné tel rôle</p>
<p>• Lister les films par genre (exemple : dans le genre SF il y a X films : Star Wars, Blade Runner, ...)</p>
<p>• Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)</p>
<p>• Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</p>
<h2>Résultat de Cinema</h2>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>exo13</title>
        
    </head>
    <body>
    <?php
    spl_autoload_register(function ($class_name) {
        require 'class/'.$class_name . '.php';
    });
    $film1 = new PooCinema("Star Wars","1977 ",120 ," Star Wars [stɑɹ wɔɹz] est un univers de science fantasy créé par George Lucas. D'abord conçue comme une trilogie cinématographique sortie entre 1977 et 1983, la saga s'accroît ensuite, entre 1999 et 2005, de trois nouveaux films, qui racontent des événements antérieurs à la première trilogie");
    $acture1 = new Personage("Star Wars","1977 ",120 ," Star Wars [stɑɹ wɔɹz] est un univers de science fantasy créé par George Lucas. D'abord conçue comme une trilogie cinématographique sortie entre 1977 et 1983, la saga s'accroît ensuite, entre 1999 et 2005, de trois nouveaux films, qui racontent des événements antérieurs à la première trilogie","Skywalker", "Luke", "H","19-04-1978");
    echo $film1->getInfos();
    echo $acture1->getActure();
    ?>
    </body>   
</html>