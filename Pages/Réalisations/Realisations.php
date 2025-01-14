<link rel="stylesheet" href="../../assets/css/Réalisations.css">
<Title>Réalisations</Title>

<?php

require_once('../yaml/yaml.php');
$data = yaml_parse_file("Realisations.yaml");

echo "<h1>Page de Réalisations</h1>";

echo "<form action='../../index.php' method='post'>
    <button type='submit'>PortFolio</button>
</form>";

foreach ($data["Realisations"] as $lesReal => $Real) {
    echo "<div class='realisation-item'>";
    echo "<h2>" . $Real["Titre"] . "</h2>";
    echo "<div class='realisation-content'>";
    echo "<h3>" . $Real["Description"] . "</h3>";
    echo "<a href='" . $Real["Documents"] . "'>";
    echo "<img src='../../" . $Real["Illustration"] . "' alt='" . $Real["Titre"] . "'>";
    echo "</a>";
    echo "</div></div>";
}
?>

