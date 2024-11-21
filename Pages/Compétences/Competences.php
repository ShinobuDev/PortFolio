<link rel="stylesheet" href="../../assets/css/Compétences.css">
<Title>Compétences</Title>

<?php

require_once('..\yaml\yaml.php');
$data = yaml_parse_file("Competences.yaml");

echo "<h1>" . $data["Titre"] . "</h1>";

echo "<form action='../index.php' method='post'>
    <button type='submit'>PortFolio</button>
</form>";

foreach ($data["Domaines"] as $nomDomaine => $unDomaine) {
    echo "<h2 class='langue'>" . $nomDomaine . "</h2>";
    foreach ($unDomaine as $uneCompetence) {
        echo "<h3>" . $uneCompetence["nom"] . "</h3>";
        echo "<div class='container'>
                    <div class='skills' style='width:" . $uneCompetence["niveau"] . "%; background-color:" . $uneCompetence["couleur"] . "'>" . $uneCompetence["niveau"] . "</div>
                  </div>";
    }
}
?>