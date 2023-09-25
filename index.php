<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Webseite</title>
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

.gallery img {
    width: 100%;
    max-width: 300px;
    margin: 10px;
}



    </style>
</head>
<body>

    <!-- Navigationsmenü -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                <li><a class="nav-link active" href="/">Home</a></li>
                <li><a class="nav-link" href="seiten/blog.html">Blog</a></li>
                <li><a class="nav-link" href="seiten/projekte.html">Projekte</a></li>
                <li><a class="nav-link" href="seiten/kontakt.html">Kontakt</a></li>
                <li><a class="nav-link" href="impressum.php">Impressum</a></li>
            </ul>
        </div>
    </div>
</nav>

    <header>
        <h1>Willkommen</h1>
        <p>Hier ist eine kurze Einführung...</p>
    </header>

    <section id="about">
        <h2>Wer sind wir</h2>
        <p>Kurzer Text über euch...</p>
    </section>

    <section id="services">
        <h2>Was machen wir</h2>
        <p>Beschreibung eurer Dienstleistungen oder Produkte...</p>
    </section>


    <div class="contact container">
        <h2>Kontakt</h2>
        <form action="process_form.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="message">Nachricht:</label>
            <textarea id="message" name="message" required></textarea>
            <br>
            <input type="submit" value="Senden">
        </form>
    </div>

    <section id="gallery">
        <h2>Galerie</h2>
        <div class="gallery">
            <img src="/img/GFN_Raum.jpg" alt="Bild 1">
            <img src="/img/GFN_Raum_2.jpg" alt="Bild 2">
            
        </div>
    </section>

</body>
</html>
