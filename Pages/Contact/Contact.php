<link rel="stylesheet" href="../../assets/css/Contact.css">
<Title>Contact</Title>

<?php

require_once('..\yaml\yaml.php');
$data = yaml_parse_file("Contact.yaml");
echo "<h1>Page de Contact</h1>";
echo "<form action='../index.php' method='post'>
    <button type='submit'>PortFolio</button>
</form>";
foreach ($data["Formation"] as $lesFormations) {
    echo "<h2>" . $lesFormations["dateDébut"] . " - " . $lesFormations["Nom"] . "</h2>";
    echo "<p><h3>" . $lesFormations["Etablissment"] . "</h3> Date de début de formation : " . $lesFormations["dateDébut"] . "<br> Date de fin de formation : " . $lesFormations["dateFin"] . "<br> Lieu de formation : " . $lesFormations["Lieu"] . "<br> Contenu de la formation : " . $lesFormations["Contenu"];

}
echo '<form action="mail.php" method="post">
 <div class="container">
  <input required="" type="text" name="nom" class="input">
  <label class="label">Nom</label>
</div>
 <div class="container">
  <input required="" type="text" name="mail" class="input">
  <label class="label">Mail</label>
</div>
 <div class="container">
  <input required="" type="text" name="objet" class="input">
  <label class="label">Objet</label>
</div>
<div class="container">
  <input required="" type="text" name="message" class="input">
  <label class="label">Message</label>
</div>
 <input type="submit" name="envoyer" value="Envoyer">
</form>'
?>

