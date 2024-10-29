<?php

require_once("../../yaml/yaml.php");
$data=yaml_parse_file('yaml/accueil.yaml');

echo "<h1>Accueil</h1>";
echo nl2br("Je m'appelle ".$data["prenom"]." ".$data["nom"].". \n");
echo nl2br($data["accroche"]." \n");
echo nl2br($data["Paragraphe"]." \n");
echo "<img src='../../assets/images/".$data["Image"]."'>";
?>