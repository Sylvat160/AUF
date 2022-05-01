<?php
    session_start();
    if (!isset($_SESSION['connecter'])) {
        header('location:acceuil.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/inscriptionA.css">
    <title>Document</title>
</head>

<body>
    <div class=" corps">


        <a class="logo" href="#"><img src="../images/logoauf.png" alt="logo"></a>



        <center>
            <form method="post" action="acceuil.php">
                <div class="sup">
                    <div class="pre">
                        <img src="../images/Groupe 14.png" width="170px" alt="">
                    </div>

                    <div class="entree">
                        <label for="nom"> <img src="../images/Groupe 15.png" width="71px" alt=""></label>
                        <input type="text" name="nom" required placeholder="Nom"> <br>

                        <label for="prenom"> <img src="../images/Groupe 16.png" width="71px" alt=""></label>
                        <input type="text" required name="prenom" placeholder="Prenom(s)"> <br>

                        <label for="email"> <img src="../images/Groupe 16.png" width="71px" alt=""></label>
                        <input type="email" required name="email" placeholder="E-mail"> <br>

                        <label for="password"> <img src="../images/Groupe 16.png" width="71px" alt=""></label>
                        <input type="password" required name="password11" placeholder=" Mot de passe"> <br>

                        <label for="Cpassword"> <img src="../images/Groupe 16.png" width="71px" alt=""></label>
                        <input type="password" required name="Cpassword" placeholder="Confirmer le mot de passe"> <br>

                        <a href="acceuil.php"> Se connecter</a>
                    </div>
                </div>
                <div class="infe">
                    <input name="enregistrer" type="submit" value="S'enregistrer">
                </div>

            </form>
            <br> <br> <br> <br>


        </center>
        <!-- <center>
            <div class="erreur">
                
                if (isset($_GET['error'])) {
                    $err = $_GET['error'];
                    if ($err == "1") {
                        echo "<p>Mot de passe incorrect</p>";
                    }
                }
                
            </div>
        </center> -->

        <div class="pied">
            <p> <span>A</span>gence <span>U</span>niversitaire de la <span>F</span>rancophonie</p>
            <img src="../images/U.png" alt="" width="150px">
        </div>

        <?php
            if (isset($_GET['error'])) {
                $err = $_GET['error'];
                if ($err == "2") {
                    echo '<script>alert("Les mots de passe ne correspondent pas")</script>';
                }
            }
        ?>


        










    </div>


    <div>

        <?php

        try {
            $bdd = new PDO(
                'mysql:host=localhost;dbname=aufbdd;',
                'root',
                '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
           
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }


        
        ?>

        
    </div>



</body>

</html>