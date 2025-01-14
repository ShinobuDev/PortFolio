<link rel="stylesheet" href="../../assets/css/Contact.css">
<Title>Contact</Title>

<?php

require_once('../yaml/yaml.php');
$data = yaml_parse_file("Contact.yaml");
echo "<h1>Page de Contact</h1>";
echo "<form action='../../index.php' method='post'>
    <button type='submit'>PortFolio</button>
</form>";
foreach ($data["Formation"] as $lesFormations) {
    echo "<h2>" . $lesFormations["dateDébut"] . " - " . $lesFormations["Nom"] . "</h2>";
    echo "<p><h3>" . $lesFormations["Etablissment"] . "</h3> Date de début de formation : " . $lesFormations["dateDébut"] . "<br> Date de fin de formation : " . $lesFormations["dateFin"] . "<br> Lieu de formation : " . $lesFormations["Lieu"] . "<br> Contenu de la formation : " . $lesFormations["Contenu"];

}

// Affichage des messages d'erreur ou de succès
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'success') {
        echo '<div class="alert success">Message envoyé avec succès!</div>';
    } elseif ($_GET['status'] == 'error') {
        echo '<div class="alert error">Erreur lors de l\'envoi du message.</div>';
    }
}

echo '<form action="send_mail.php" method="post">
    <div class="container">
        <input required type="text" name="nom" class="input">
        <label class="label">Nom</label>
    </div>
    <div class="container">
        <input required type="email" name="mail" class="input">
        <label class="label">Email</label>
    </div>
    <div class="container">
        <input required type="text" name="objet" class="input">
        <label class="label">Objet</label>
    </div>
    <div class="container">
        <textarea required name="message" class="input" rows="5"></textarea>
        <label class="label">Message</label>
    </div>
    <input type="submit" name="envoyer" value="Envoyer">
</form>'
?>

