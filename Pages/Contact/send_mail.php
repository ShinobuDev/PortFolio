<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = strip_tags(trim($_POST["nom"]));
    $email = filter_var(trim($_POST["mail"]), FILTER_SANITIZE_EMAIL);
    $objet = strip_tags(trim($_POST["objet"]));
    $message = strip_tags(trim($_POST["message"]));

    // Vérification des données
    if (empty($nom) || empty($message) || empty($email) || empty($objet)) {
        header("Location: Contact.php?status=error");
        exit;
    }

    // Vérification de l'email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: Contact.php?status=error");
        exit;
    }

    // Email de destination (à modifier avec votre email)
    $destinataire = "votre-email@domaine.com";

    // Création de l'en-tête de l'email
    $headers = "From: $nom <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Contenu de l'email
    $contenu_email = "Message de : $nom\n";
    $contenu_email .= "Email : $email\n\n";
    $contenu_email .= "Message :\n$message";

    // Envoi de l'email
    if (mail($destinataire, $objet, $contenu_email, $headers)) {
        header("Location: Contact.php?status=success");
    } else {
        header("Location: Contact.php?status=error");
    }
} else {
    header("Location: Contact.php");
}
exit;
?> 