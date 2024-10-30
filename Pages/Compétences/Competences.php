<link rel="stylesheet" href="../../assets/css/main.css">

<?php

require_once('..\yaml\yaml.php');
$data=yaml_parse_file("Competences.yaml");
echo "<style stylesheet='../assets/css/Accueil.css'></style>";

echo "<h1>".$data["Titre"]."</h1>";
foreach($data["Domaines"] AS $Domaine) {
    echo ucfirst($Domaine["Langue"]).", ".$Domaine["Cybersécurité"].", ".$Domaine['Langues'].", ".$Domaine["Bureautiques"].".";
}
echo "<form action='../index.php' method='post'>
    <button type='submit'>PortFolio</button>
</form>";
?>

