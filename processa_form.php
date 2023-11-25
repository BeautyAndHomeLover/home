<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];
    $message = $_POST["message"];
    $contactPreference = $_POST["contact-preference"];

    // Costruisci il corpo del messaggio
    $mailBody = "Nome: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Telefono: $tel\n";
    $mailBody .= "Messaggio: $message\n";
    $mailBody .= "Preferenza di contatto: $contactPreference\n";

    // Indirizzo email a cui inviare i dati del modulo
    $to = "beauty.homelover@gmail.com";
    $subject = "Nuovo modulo di contatto da Beauty & Home";

    // Invia l'email
    mail($to, $subject, $mailBody);

    // Puoi anche reindirizzare l'utente a una pagina di conferma
    header("Location: conferma_invio.html");
} else {
    // Se la richiesta non è POST, reindirizza a una pagina di errore
    header("Location: errore.html");
}
?>
