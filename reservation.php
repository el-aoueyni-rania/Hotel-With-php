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
    <title>reservation</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body class="bd">
<?php include 'connexion.php' ?> 
<?php include_once 'templates/navbar2.php' ?>

<?php
        $sql = 'SELECT * FROM reservation ORDER BY arrivée ASC ';
        $reponse = $con->query($sql);
?>
<div class="container">
        <hr>
        <div class="row">
            <a href="insereres.php">
                <button class="btn btn-primary active"><i class="fas fa-calendar-plus"></i> Nouvelle réservation</button>
            </a>
        </div>
        <hr>
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
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-hover table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Date d'arrivée</th>
                            <th>Nombre De Nuit(s)</th>
                            <th>Nombre De Chambre(s)</th>
                            <th>Nombre D'adulte(s)</th>
                            <th>Nombre D'enfant(s)</th>
                            <th>Supprimer</th>
                            <th>Modifier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if ($reponse->rowCount()>0)
                            {
                                while ($ligne = $reponse->fetch(PDO::FETCH_ASSOC))
                                {
                                    echo "<tr>";
                                    echo "<td>".$ligne['id']."</td>";
                                    echo "<td>".$ligne['arrivée']."</td>";
                                    echo "<td>".$ligne['nuits']."</td>";
                                    echo "<td>".$ligne['nbrch']."</td>";
                                    echo "<td>".$ligne['adulte']."</td>";
                                    echo "<td>".$ligne['enfant']."</td>";
                                    echo '<td><a  onclick="return confirm(\'supprimer?\')"  href="supprimeres.php?id=' . $ligne['id'] . '"><i class="fas fa-trash"></i></a></td> ';
                                    echo '<td><a  onclick="return confirm(\'modifier?\')"  href="modifierformres.php?id=' . $ligne['id'] . '"><i class="fas fa-edit"></i></a></td>';
                                    echo "</tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>




<?php include_once 'templates/footer.html' ?>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>