<h1> EXERCICE 2 </h1>
<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots contenus dans celle-ci. <br>
</p>
<h2>Résultat</h2>
<?php
    $phrase ="Notre formation DL commence aujourd'hui";
    echo "La phrase « $phrase » contient ".str_word_count($phrase)." Mots.";
    // echo "La phrase « ".$phrase." » contient ".str_word_count($phrase)." Mots."."<br/>";
?>