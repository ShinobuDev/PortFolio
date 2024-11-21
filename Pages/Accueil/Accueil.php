<link rel="stylesheet" href="../../assets/css/main.css">
<Title>Accueil</Title>

<?php

require_once('..\yaml\yaml.php');
$data = yaml_parse_file("Accueil.yaml");
echo "<style stylesheet='../../assets/css/main.css'></style>";

echo "<h1>" . $data["Titre"] . "</h1>";

echo "<form action='../index.php' method='post'>
    <button type='submit'>PortFolio</button>
</form>";

echo nl2br("Je m'appelle " . $data["Prenom"] . " " . $data["Nom"] . ". \n");
echo nl2br($data["Accroche"] . " \n");
echo nl2br($data["Paragraphe"] . " \n");
echo "<img id=image src='" . $data["Image"] . "'>";
?>
