<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Basi di Dati | Laboratorio 3 </title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="favicon.png">
</head>


    <body>

        <style>
            form {
                padding: 20px;
            }
        </style>
        
        <form method="POST" action="step1.php">
        <?php
            if ($_POST["password"] == "abc") {
                echo "<p> Premi il pulsante per accedere al sito </p>";
                echo "<input type='submit' value='Continua'>";

            } else {
                $user = $_POST["username"];
                echo "Utente " . $user . " la password che hai inserito non risulta essere valida. <br> Se vuoi puoi ";
                echo '<a href= "login.html" >riprovare</a>' . ' ad accedere.';
            }
        ?>

        </form>

    </body>
</html>