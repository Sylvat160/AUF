<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/page2.css">
    <title>AUF</title>
</head>

<body>

    <nav class="navbar navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="acceuil.php">
                <img src="../images/logoauf.png" alt="" width="100" height="84">

            </a>
            <a href="#" class="navbar-brand lien1 gx-2"></a>
            <a href="#" class="navbar-brand lien1"></a>
            <button class="navbar-toggler hamb" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>


        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Ajouter des abonnes</a>
                    <a class="nav-link active" aria-current="page" href="#">Voir la liste des abonnees</a>
                </li>
            </ul>
        </div>
    </nav>


    


    <?php

    if (isset($_POST['connecter'])) {
        $password = $_POST['password'];
        if ($password == 'AgenceUF') {
            

      

        header("location:formuInscription.php");

        } else {
            echo "<h1><script> alert(\" Mot de passe incorrect\");</script></h1>";
            header("location:acceuil.php?error=1");
        }
    }
    ?>

   

    <!-- <center>
        <a href="#">
            <img src="../images/+.png" alt="">
        </a>
    </center> -->



    <script src="../JS/bootstrap.bundle.min.js"></script>
</body>

</html>