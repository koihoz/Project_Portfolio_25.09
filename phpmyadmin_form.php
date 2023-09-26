<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhpmyAdmin Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    margin: 0;
    padding: 0;
    }

header, section {
    padding: 20px;
    margin: 20px;
}

.container  {
    background-color: #fff;
    padding: 20px;
    max-width: 1200px;
    margin: 40px auto;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
}

.contact h2 {
    color: #444;
    border-bottom: 1px solid #ddd;
    padding-bottom: 10px;
    margin-top: 0;
}

/* Стили для формы */
.contact form {
    margin-top: 20px;
}

.contact label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.contact input[type="text"],
.contact input[type="email"],
.contact textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

.contact textarea {
    height: 100px;
    resize: vertical;
}

.contact input[type="submit"] {
    background-color: #007BFF;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

.contact input[type="submit"]:hover {
    background-color: #0056b3;
}



    </style>
</head>
<body>


<?php
$host = 'localhost';
$db   = 'portfolio-db'; // Имя вашей базы данных
$user = 'root';      // Имя пользователя для доступа к базе данных
$pass = '';      // Пароль для доступа к базе данных
$charset = 'utf8mb4';

$pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['formSubmit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $stmt = $pdo->prepare("INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)");
    $stmt->execute(['name' => $name, 'email' => $email, 'message' => $message]);

    header("Location: success.php");
    exit;
}
?>



    <!-- Navigationsmenü -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li><a class="nav-link active" href="index.php">Home</a></li>
                <li><a class="nav-link" href="seiten/blog.html">Blog</a></li>
                <li><a class="nav-link" href="seiten/projekte.html">Projekte</a></li>
                <li><a class="nav-link" href="seiten/kontakt.html">Kontakt</a></li>
                <li><a class="nav-link" href="impressum.php">Impressum</a></li>
            </ul>
        </div>
    </div>
</nav>


    <div class="contact container">
        <h2>Kontakt</h2>
        <form action="" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Nachricht:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <input type="submit" name="formSubmit" value="Senden">
        </form>
    </div>


</body>
</html>
