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
    echo 
        " <div class='Formsendung'>
            <p class='Formsendung_satz-erfolg'> Nachricht wurde gespeichert! </p>
            <a href='index.php' class='button-link'>Zur Anfang</a>

        </div> ";
    
    ?>

    </body>
</html>