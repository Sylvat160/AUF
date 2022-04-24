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

    <div class="container sup py-5">
        <p class="voir"> Voir la liste des Abonnés</p>
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
           <center> <p style="background-color: #CC767F; color:#fff; width:40%; height:50px; display:flex; align-items:center;">
                
                <span style="position: relative; left:20px;"> <?php echo $donnees['nom'] ?></span>
                <span style="position: relative; left:100px;"> <?php echo $donnees['prenoms'] ?></span> 
                <span style="position: relative; left:200px;"> <?php echo $donnees['numero'] ?></span>
                <span style="position: relative; left:300px;">Supprimer</span>
                
                 
            </p> </center>

        <?php

        }
        $recu->closeCursor();
        ?>

    </div>

</body>

</html>