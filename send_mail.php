<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to = 'antoinelucas0503@gmail.com'; // Remplacez par l'adresse email de votre père
    $subject = "Nouveau message de Momo Carrelage";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message envoyé avec succès !";
    } else {
        echo "Erreur lors de l'envoi du message.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
