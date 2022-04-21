<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/bootstrap.min.css">
    <link rel="stylesheet" href="../CSS/formuInscri.css">
    <title>AUF</title>
</head>

<body>

    <?php
    include("entete.php");
    ?>

    <div class="container sup">
        <p class="ajout"> Ajouter des Abonnés</p>
    </div>

    <div class="container">
        <form action="" class="formu py-5">




            <label for="nom">
                <p class="gx-3"><img src="../images/profile-user.png" alt="" width="40" class=""></p>
            </label>
            <input type="text" required name="nom" placeholder="Nom" class="element" style="background-color:#CC767F; position: relative;  bottom:4px;">

            <label for="numero">
                <p style="position: relative; left: 100px;"><img src="../images/profile-user.png" alt="" width="40"></p>
            </label>
            <input type="text" required name="prenom" placeholder="Numero de telephone" class="element" style="position: relative; left:95px; bottom:4px; background-color:#CC767F; color:#fff;"> <br>

            <label for="prenom">
                <p><img src="../images/profile-user.png" alt="" width="40"></p>
            </label>
            <input type="text" required name="prenom" placeholder="Prenom" class="element" style="background-color:#CC767F;position: relative;  bottom:4px; color:#fff;">

            <label for="mail">
                <p style="position: relative; left: 100px;"><img src="../images/profile-user.png" alt="" width="40"></p>
            </label>
            <input type="email" required name="mail" placeholder="Email" class="element" style="position: relative; left:95px; bottom:4px; background-color:#CC767F; color:#fff;"> <br>

            <label for="dNaissance">
                <p><img src="../images/profile-user.png" alt="" width="40"></p>
            </label>
            <input type="text" required name="DNaissance" placeholder="Date de naissance" class="element" style="background-color:#CC767F; color:#fff; position: relative;  bottom:4px;">

            <label for="debut">
                <p style="position: relative; left: 100px;"><img src="../images/profile-user.png" alt="" width="40"></p>
            </label>
            <input type="text" required name="debut" placeholder="Début d'abonnement" class="element" style="position: relative; left:95px; bottom:4px; bottom:4px; background-color:#CC767F; color:#fff;">

             <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-5">
                        <input type="submit" value="Enregistrer" name="enregistrer" class="enregi" style="width: 190px; height:70px; background:red; border-radius :20px;">
                    </div>
                </div>
             </div>



        </form>
    </div>


    <script src="../JS/bootstrap.bundle.min.js"></script>
</body>

</html>