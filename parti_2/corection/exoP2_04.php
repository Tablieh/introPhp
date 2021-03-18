<h1>EXERCICE 4</h1>

<a href=".">Retour</a>

<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).<br>
On admet que l’URL de la page Wikipédia de la capitale adopte la forme : <code>https://fr.wikipedia.org/wiki/[nom_ville]</code><br>
Le tableau passé en argument sera le suivant :<br>
<code>$capitales = ["France"=>"Paris","Allemagne"=>"Berlin",
"USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid"];</code></p>

<h2>Résultat</h2>

<?php

$capitales = [
	"France" => "Paris",
	"Allemagne" => "Berlin",
	"USA" => "Washington",
	"Italie" => "Rome",
    "Japon" => "Tokyo"
];

// $capitales2 = [
//     "France" => ["Paris", "http://www.paris.fr"],
//     "Allemagne" => ["Berlin", "http://www.berlin.de"],
//     "Japon" => ["Tokyo", "http://www.tokyo.jp"],
// ];

// echo "<a href='".$capitales2["Japon"][1]."'>Lien</a>";

echo afficherTableHTML($capitales);
echo afficherTableHTML();

function afficherTableHTML(array $capitales = ["clé" => "valeur"]){
    asort($capitales);
    $result = "<table border = 1>
                <thead>
                    <tr>
                        <th>Pays</th>
                        <th>Capitale</th>
                        <th>Lien wiki</th>
                    </tr>
                </thead>
                <tbody>";
                foreach ($capitales as $pays => $capitale) {
                    $result .= 
                        "<tr>
                            <td>".mb_strtoupper($pays)."</td>
                            <td>$capitale</td>
                            <td><a href='https://fr.wikipedia.org/wiki/$capitale' target='_blank'>Lien</a>
                        </tr>";
                }
    $result .= "</tbody></table>";
    return $result;
}