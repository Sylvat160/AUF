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
        <form method="post" action="" class="formu py-5">


            <label for="nom">
                <p id="nom" class="gx-3"><img src="../images/name.png" alt="" width="40" class=""></p>
            </label>
            <input id="nomi" type="text" required name="nom" placeholder="Nom" class="element" style="">


            <label for="numero">
                <p id="num" ><img src="../images/phone.png" alt="" width="40"></p>
            </label>
            <input id="numi" type="text" required name="numero" placeholder="Numero de telephone" class="element" > <br>

            <label for="prenom">
                <p id="prenm"><img src="../images/name.png" alt="" width="40"></p>
            </label>
            <input id="prenmi" type="text" required name="prenom" placeholder="Prenom" class="element" >

            <label for="mail">
                <p id="mail" ><img src="../images/mail.png" alt="" width="40"></p>
            </label>
            <input id="maili" type="email" required name="mail" placeholder="Email" class="element" > <br>

            <label for="dNaissance">
                <p id="naiss"><img src="../images/birth.png" alt="" width="40"></p>
            </label>
            <input id="naissi" type="date" required name="dNaissance" placeholder="Date de naissance" class="element" >

            <label for="debut">
                <p id="abon" ><img src="../images/date.png" alt="" width="40"></p>
            </label>
            <input id="aboni" type="date" required name="debut" placeholder="Début d'abonnement" class="element" >

            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-5">
                        <input type="submit" value="Enregistrer" name="enregistrer" class="enregi" style="width: 190px; height:70px; background:red; border-radius :20px;">
                    </div>
                </div>
            </div>



        </form>
    </div>

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

    if (isset($_POST['nom']) and isset($_POST['numero']) and isset($_POST['prenom']) and isset($_POST['mail']) and isset($_POST['dNaissance']) and isset($_POST['debut'])) {
        $nom = $_POST['nom'];
        $numero = $_POST['numero'];
        $prenom = $_POST['prenom'];
        $mail = $_POST['mail'];
        $dNaissance = $_POST['dNaissance'];
        $debut = $_POST['debut'];

        $req = $bdd->prepare("INSERT INTO identifiants(nom, prenoms, date_de_naissance, numero, email, date_d_abonnement) VALUES(:nom, :prenoms, :date_de_naissance, :numero, :email, :date_d_abonnement)");
        $req->bindParam(':nom', $nom);
        $req->bindParam(':prenoms', $prenom);
        $req->bindParam(':date_de_naissance', $dNaissance);
        $req->bindParam(':numero', $numero);
        $req->bindParam(':email', $mail);
        $req->bindParam(':date_d_abonnement', $debut);
        $req->execute();

        $req->closeCursor();
    }


    ?>
    
    <?php
        include("listeA.php");
    ?>

    <center>
        <a href='#'>
            <img src='../images/+.png' alt=''>
        </a>
    </center>


    <script src="../JS/bootstrap.bundle.min.js"></script>
</body>

</html>