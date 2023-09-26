<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
    color: #333;
    margin: 0;
    padding: 0;
    }        

.button-link {
    display: inline-block;
    background-color: #007BFF;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.button-link:hover {
    background-color: #0056b3;
}

.Formsendung{
    margin: 20px;
}

.Formsendung_satz-erfolg{
 padding-bottom: 20px;
}

    </style>
</head>
<body>

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
        echo 
        " <div class='Formsendung'>
            <p class='Formsendung_satz-erfolg'> Nachricht to $to wurde gesendet! </p>
            <a href='index.php' class='button-link'>Zur Anfang</a>

        </div> ";
          

    } else {
        echo "Beim Senden der Nachricht ist ein Fehler aufgetreten.";
    }
}
?>


</body>
</html>



