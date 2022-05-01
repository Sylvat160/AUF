<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/acceuil.css">
    <title>Document</title>
</head>

<body>
    <div class=" corps">

        <a class="logo" href="#"><img src="../images/logoauf.png" alt="logo"></a>

        <center>
            <form method="post" action="">
                <div class="sup">
                    <div class="pre">
                        <img src="../images/Groupe 14.png" width="170px" alt="">
                    </div>

                    <div class="entree">
                        <label for="adresse"> <img src="../images/Groupe 15.png" width="71px" alt=""></label>
                        <input type="email" name="adresse" required placeholder="Adresse ID"> <br>
                        <label for="password"> <img src="../images/Groupe 16.png" width="71px" alt=""></label>
                        <input type="password" required name="password" placeholder="Mot de passe"> <br>

                        <a href="inscriptionA.php"> S'enregistrer</a>
                    </div>
                </div>
                <div class="infe">
                    <input name="connecter" type="submit" value="Se connecter">
                </div>

            </form>
            <br> <br> <br> <br>


        </center>



        <div class="pied" id="pied">
            <p> <span>A</span>gence <span>U</span>niversitaire de la <span>F</span>rancophonie</p>
            <img src="../images/U.png" alt="" width="150px">
        </div>


        <?php
        try {
            $bdd = new PDO(
                'mysql:host=localhost;dbname=aufbdd',
                'root',
                '',
                array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)
            );
        } catch (Exception $e) {
            die('Erreur : ' . $e->getMessage());
        }







        if (isset($_POST['nom']) and isset($_POST['prenom']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['Cpassword'])) {
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $Cpassword = $_POST['Cpassword'];
            $password_h = md5($password);

            if ($password == $Cpassword) {
                $req = $bdd->prepare('INSERT INTO admin_account (nom, prenom, email, mot_de_passe) VALUES(:nom, :prenom, :email, :mot_de_passe)');
                $req->execute(array(
                    'nom' => $nom,
                    'prenom' => $prenom,
                    'email' => $email,
                    'mot_de_passe' => $password_h
                ));
                echo '<script>alert("Vous êtes bien inscrit. \n Vous pouvez maintenant vous connecter.")</script>';
            } else {
                header("location:inscriptionA.php?error=2");
            }
        }


        ?>





    </div>

    <?php

    

    

    if (isset($_POST['connecter']) and isset($_POST['adresse']) and isset($_POST['password'])) {
        $adresse1 = $_POST['adresse'];
        $password1 = md5($_POST['password']);

        $req = $bdd->prepare('SELECT * FROM admin_account WHERE email = :email AND mot_de_passe = :password');
        $req->execute(array(
            'email' => $adresse1,
            'password' => $password1
        ));
        $resultat = $req->fetch();
        if(!$resultat){
            echo '<script>alert("Votre adresse ou mot de passe est incorrect")</script>';
        }else{
            header("location:formuInscription.php?exist=1");
        }

    


        



        // if ($password1) {
        //     $sql = "SELECT * FROM admin_account WHERE email = :adresse AND mot_de_passe = :password1";
        //     $resultat = $bdd->prepare($sql);
        //     $resultat->execute(array(
        //         'adresse' => $adresse1,
        //         'password1' => $password1
        //     ));
        //     $count = $resultat->rowCount();
        //     if ($password1 == $password_h) {
        //         // session_start();
        //         // $_SESSION['adresse'] = $adresse;
        //         // $_SESSION['password'] = $password;
        //         // header('location:acceuil.php');
        //         echo '<script>alert("Vous êtes bien connecté")</script>';   
        //     } else {
        //         echo "<script>alert('Votre adresse ou mot de passe est incorrect')</script>";
        //     }
        // } else {
        //     echo "authen error";
        // }
    }
    ?>



</body>

</html>