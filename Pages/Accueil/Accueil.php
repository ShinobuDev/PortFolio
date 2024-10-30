<style stylesheet="../assets/Accueil.php"></style>


<?php

require_once('..\yaml\yaml.php');
$data=yaml_parse_file("Accueil.yaml");
echo "<style stylesheet='../assets/css/Accueil.css'></style>";

echo "<h1>".$data["Titre"]."</h1>";
echo nl2br("Je m'appelle ".$data["Prenom"]." ".$data["Nom"].". \n");
echo nl2br($data["Accroche"]." \n");
echo nl2br($data["Paragraphe"]." \n");
echo "<img id=image src='".$data["Image"]."'>";
