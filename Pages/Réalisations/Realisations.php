<link rel="stylesheet" href="../../assets/css/Réalisations.css">
<Title>Réalisations</Title>

<?php

require_once('..\yaml\yaml.php');
$data = yaml_parse_file("Realisations.yaml");

echo "<h1>Page de Réalisations</h1>";

echo "<form action='../index.php' method='post'>
    <button type='submit'>PortFolio</button>
</form>";

foreach ($data["Realisations"] as $lesReal => $Real) {
    echo "<h2>" . $Real["Titre"] . "</h2>";
    echo "<p><h3>" . $Real["Description"] . "</h3><a href='" . $Real["Documents"] . "'><img src='" . $Real["Illustration"] . "' /></a>\n";

}
?>

