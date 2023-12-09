<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Adres e-mail odbiorcy
    $to = 'awrogalska@gmail.com';

    // Temat wiadomości
    $subject = 'Nowa wiadomość ze strony';

    // Treść wiadomości
    $message_body = "Imię: $name\nEmail: $email\nWiadomość: $message";

    // Nagłówki e-maila
    $headers = "From: $email";

    // Wysłanie e-maila
    if (mail($to, $subject, $message_body, $headers)) {
        echo 'Wiadomość została wysłana.';
    } else {
        echo 'Wystąpił błąd podczas wysyłania wiadomości.';
    }
}
?>
