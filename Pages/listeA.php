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
    <link rel="stylesheet" href="../CSS/listeA.css">
    <title>AUf</title>
</head>

<body>

    <div class="container sup ">
        <p class="voir"> La liste des Abonnés</p>
    </div>

    <div class="affiche">

        <?php

        try {
            $bdd = new PDO('mysql:host=localhost;dbname=aufbdd', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }

        $recu = $bdd->query('SELECT * FROM identifiants');

        while ($donnees = $recu->fetch()) {

        ?>
           <center> <p id="affi" >
                
                <span id="nom1" > <?php echo $donnees['nom'] ?></span>
                <span id="prenom1"> <?php echo $donnees['prenoms'] ?></span> 
                <span id="numero1" > <?php echo $donnees['numero'] ?></span>
                <span id="mail1" ><?php echo $donnees['email'] ?></span>
                
                 
            </p> </center>

        <?php

        }
        $recu->closeCursor();
        ?>

    </div>

</body>

</html>