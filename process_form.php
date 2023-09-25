<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Санитизация данных
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    // Проверка валидности email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Ungültige E-Mail-Adresse!";
        exit;
    }

    // Здесь вы можете добавить код для отправки письма, сохранения в базе данных и т. д.
    // Например, отправка письма:
    $to = "koihozde@gmail.com"; 
    $subject = "Neue Nachricht von $name";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    if (mail($to, $subject, $message, $headers)) {
        echo "Nachricht to $to wurde gesendet!";
    } else {
        echo "Beim Senden der Nachricht ist ein Fehler aufgetreten.";
    }
}
?>
