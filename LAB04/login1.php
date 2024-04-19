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

        include 'vars.php';

        $user = $_POST["username"];

        if (areCredentialsCorrect($user, $password)) {

            # Corretto
            $_SESSION["logged_user"] = $user;  //SESSION

            echo "Utente $user le tue credenziali sono valide";
            echo "<p> Premi il pulsante per accedere al sito </p>";
            echo "<a href='step1.php'><button>Continua</button></a>";
        } else {
            # Non Corretto
            echo "Utente " . $user . " la password che hai inserito non risulta essere valida. <br> Se vuoi puoi ";
            echo '<a href= "login.html" >riprovare</a>' . ' ad accedere.';
        }


        function areCredentialsCorrect($user, $password)
        {
            include 'vars.php';

            #Connessione al DB
            $conn = pg_connect($connection_str);
            if (!$conn) {
                return false;
            }


            #Interrogazione del DB
            $query = "SELECT * FROM utente WHERE username=$1 AND pwd=$2";
            $result = pg_query_params($conn, $query, array($user, $pwd)); 
            $found = pg_fetch_array($result, NULL, PGSQL_ASSOC);
            //tutto questo sopra interroga il DB e in più mi controlla che dentro la query non ci sia sql -> potrebbe cancellare tutto ! 

            # Verifica Risultati
            if (!$found) {
                return false;
            }

            return true;
        }
        ?>

    </form>

</body>

</html>