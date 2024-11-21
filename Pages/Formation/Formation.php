<link rel="stylesheet" href="../../assets/css/main.css">
<Title>Formations</Title>
<?php

require_once('..\yaml\yaml.php');
$data=yaml_parse_file("Formation.yaml");
echo "<h1>Page de Formation</h1>";
echo "<form action='../index.php' method='post'>
    <button type='submit'>PortFolio</button>
</form>";
echo "<h2>Formations de 2020 à aujourd'hui :</h2>";

foreach($data["Formation"] AS $lesFormations) {
    echo "<h2>".$lesFormations["dateDébut"]." - ".$lesFormations["Nom"]."</h2>";
    echo "<p><h3>".$lesFormations["Etablissment"]."</h3> Date de début de formation : ".$lesFormations["dateDébut"]."<br> Date de fin de formation : ".$lesFormations["dateFin"]."<br> Lieu de formation : ".$lesFormations["Lieu"]."<br> Contenu de la formation : ".$lesFormations["Contenu"];

}
?>

