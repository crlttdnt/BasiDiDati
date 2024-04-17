<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Basi di Dati | Laboratorio 3</title>
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="" />
    <link rel="icon" href="favicon.png">
</head>



<body>
    <style>
        table,
        tr,
        td, th {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px 20px;
            text-align: left;
        }
    </style>

    <?php
        $expected = array("nome", "cognome", "giorno", "mese", "anno", "attivita", "condizioni");
        $cont = 0;
        foreach ($expected as $key => $value) {
            if (empty($_POST[$value])) {
                $cont++;
            }
        }
        echo "<br>";

        if ($cont == 0) {
            echo "Riepilogo dei dati inseriti:";
            echo "<p>";
                echo "<table>";
                echo "<tr>";
                    echo "<th> Utente </th>";
                    echo "<th> Data di nascita </th>";
                    echo "<th> Sesso </th>";
                    echo "<th colspan = '".count($_POST['attivita'])."' >
                                Attività
                        </th>";
        
                echo "</tr>";
        
        
                echo "<tr>";
                     echo "<td>";
                        echo $_POST["nome"] . " " . $_POST["cognome"];
                    echo "</td>";
                    echo "<td>";
                        echo $_POST["giorno"] . "/" . $_POST["mese"] . "/" . $_POST["anno"];
                    echo "</td>";
        
                    echo "<td>";
                        echo ucfirst($_POST["sesso"]);
                    echo "</td>";
        
                    
                       $attivita = $_POST["attivita"];
                        foreach ($attivita as $key => $value) {
                            echo "<td>";
                            echo ucfirst($value);
                            echo "</td>";
                    }
                          
                    
        
                echo "</tr>";
        
                echo "</table>";
            echo "</p>";
        } else {
            echo "Sono stati rilevati " . $cont . " errori." . "<br>";
            echo "Non sono stati inseriti i dati per i seguenti campi:" . "<br>";
            echo "<ol>";
            foreach ($expected as $key => $value) {
                if (empty($_POST[$value])) {
                    echo "<li>";
                    echo $value;
                    echo "</li>";
                }
            }
            echo "</ol>";


            if (array_key_exists("attivita", $_POST)) {
                echo "Hai inserito i seguenti dati relativi alle attività:" . "<br>";
                echo "<ul>";
                $attivita = $_POST["attivita"];
                foreach ($attivita as $key => $value) {
                    echo "<li>";
                    echo ucfirst($value);
                    echo "</li>";
                }
                echo "</ul>";
            }
            echo '<br>';
            echo 'Per favore ' . '<a href= "es01.php" > riprova </a>';
        }




    ?>
</body>

</html>