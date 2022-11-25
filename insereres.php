<?php	
require_once 'connexion.php';
session_start();
if(!isset($_SESSION['user_session'])) { 
header('Location:index.php');
}
$user_id = $_SESSION['user_session'];
$sql = "SELECT * FROM users WHERE user_id=$user_id";
$reponse = $con->query($sql);
$ligne = $reponse->fetch(PDO::FETCH_ASSOC);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserer une nouvelle reservation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body class="bd">
<?php include 'connexion.php' ?> 
<?php include 'utilities.php' ?>
<?php include_once 'templates/navbar2.php' ?>
<div class="container">
<?php
            if (!empty($_POST)) {
                $arrivée =test_input($_POST['arrivée']);
                $nuits = test_input($_POST['nuits']);
                $nbrchambre = test_input($_POST['nbrchambre']);
                $nbradulte = test_input($_POST['nbradulte']);
                $nbrenfant = test_input($_POST['nbrenfant']);
                $sql = "INSERT INTO reservation(arrivée,nuits,nbrch,adulte,enfant) VALUES (? , ? , ? , ? , ?)";
                $req = $con->prepare($sql);
                $res=$req->execute([$arrivée , $nuits , $nbrchambre , $nbradulte , $nbrenfant]);
                if ($res)
                {
                    echo '<div class="alert alert-success" role="alert">';
                        echo 'Insertion effectuée avec succès';
                    echo '</div>';
                } else
                {
                    echo '<div class="alert alert-danger" role="alert">';
                        echo 'Problème d\'insertion';
                    echo '</div>';
                }
            }
        ?>
        <hr>



<fieldset>
            <legend><h2>Insérer une nouvelle reservation</h2></legend>
            <hr>
            <form action="<?= $_SERVER['PHP_SELF'] ?>"  method="post">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="arrivée">Date d'arrivée</label>
                    <div class="col-sm-7">
                        <input type="date" name="arrivée" class="form-control" id="arrivée" placeholder="Date d'arrivée ?">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nuits">Nombres de nuits</label>
                    <div class="col-sm-7">
                        <input type="text" name="nuits" class="form-control" id="nuits" placeholder="Nombres de nuits ? ">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nbrchambre">Nombres de chambre(s)</label>
                    <div class="col-sm-7">
                        <input type="text" name="nbrchambre" class="form-control" id="nbrchambre" placeholder="Nombres de chambre(s) ? ">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nbradulte">Nombres d'adulte(s)</label>
                    <div class="col-sm-7">
                        <input type="text" name="nbradulte" class="form-control" id="nbradulte" placeholder="Nombres d'adulte(s) ? ">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="nbrenfant">Nombres d'enfant(s)</label>
                    <div class="col-sm-7">
                        <input type="text" name="nbrenfant" class="form-control" id="nbrenfant"  placeholder="Nombres d'enfant(s) ? ">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" required>
                            <label class="form-check-label"> Contrat lu et accepté</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="btValider" class="btn btn-info">Valider</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>




<?php include_once 'templates/footer.html' ?>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>