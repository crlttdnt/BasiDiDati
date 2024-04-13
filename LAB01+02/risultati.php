<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Basi di Dati | Laboratorio 1</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="favicon.png">
</head>



<body>
    <style>
        table,
        tr,
        td {
            border: 2px solid black;
            border-collapse: collapse;
            padding: 10px 20px;
            text-align: left;

            background-color: #ccccff;
        }
    </style>

    <h1> BENVENUTO! ECCO I TUOI DATI: </h1>
    <table>
        <tr>
            <td>
                <b>Nome:</b>
            </td>
            <td>
                <?php
                echo $_POST["nome"];
                ?>
            </td>
        </tr>

        <tr>
            <td>
                <b>Cognome:</b>
            </td>
            <td>
                <?php
                echo $_POST["cognome"];
                ?>
            </td>
        </tr>

        <tr>
            <td>
                <b>Data di nascita:</b>
            </td>
            <td>
                <?php
                echo $_POST["giorno"] . "/" . $_POST["mese"] . "/" . $_POST["anno"];
                ?>
            </td>

        </tr>

        <tr>
            <td>
                <b>Sesso:</b>
            </td>
            <td>
                <?php
                echo ucfirst($_POST["sesso"]);
                ?>
            </td>

        </tr>

        <tr>
            <td>
                <b>Attività:</b>
            </td>
            <td>
                <?php
                if (!array_key_exists("attivita", $_POST)) {
                    echo "Manca attività, ";
                    echo '<a href= "es02.php" > riprova </a>';
                } else {
                    $attivita = $_POST["attivita"];
                    echo "<ul>";
                    foreach ($attivita as $key => $value) {
                        echo "<li>" . ucfirst($value) . "</li>";
                    }
                }

                echo "</ul>";

                ?>
            </td>

        </tr>

        <tr>
            <td>
                <b>Condizioni:</b>
            </td>
            <td>
                <?php
                if (!array_key_exists("condizioni", $_POST)) {
                    echo "Condizioni not ok !";
                } else {
                    echo $_POST["condizioni"];
                }
                ?>
            </td>

        </tr>

    </table>


    <!-- 
    <?php

    foreach ($_POST as $name => $value) {
        if ($name == "attivita") {
            print_r($value);
            echo "<br>";
        } else {
            echo ucfirst($name) . " : " . ucfirst($value) . "<br>";
        }
    }

    if (!array_key_exists("attivita", $_POST)) {
        echo "Manca attività, ";
        echo '<a href= "es02.php" > riprova </a>';
    }

    if (!array_key_exists("condizioni", $_POST)) {
        echo "Condizioni not ok !";
    }



    ?>

    -->
</body>

</html>