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
    <title>Gallerie</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body class="bd">
<?php include 'connexion.php' ?> 
<?php include_once 'templates/navbar2.php' ?>
<?php
        $sql = 'SELECT * FROM gallerie ';
        $reponse = $con->query($sql);
?>
<br>
        <div class="row">
            <div class="col-lg-12">
                <?php
                    if (isset($_SESSION['errors'])) {
                        echo '<div class="alert alert-danger" role="alert">';
                            echo $_SESSION['errors'];
                        echo '</div>';
                        unset($_SESSION['errors']) ;
                    }
                ?>
            </div>
        </div>

<section class="gr1">
    <?php while ($ligne = $reponse->fetch(PDO::FETCH_ASSOC)) { ?>
            <img class="kk im1" src="images/<?= $ligne['images'] ?>"/>  
    <?php } ?>
</section>



<?php include_once 'templates/footer.html' ?>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>