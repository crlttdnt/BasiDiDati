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
        <h3> I tuoi dati: </h3>

        <?php 

            if(isset($_COOKIE["logged_user"])) {    //logged user che ho usato in login1 da user di login
                //The isset function in PHP is used to determine whether a variable is set or not.
                # Corretto
                $user = $_COOKIE["logged_user"];
                echo "Utente $user le tue credenziali sono valide<br>";
            } else {
                # Non corretto
                echo 'Devi fare il ' . '<a href= "login.html" >login</a>' . ' per accedere. <br>';
            }
            
        ?>
        



    </body>

</html>