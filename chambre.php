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
    <title>Chambre</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body class="bd">
<?php include 'connexion.php' ?> 
<?php include_once 'templates/navbar2.php' ?>

<?php
        $sql = 'SELECT * FROM chambre ORDER BY prix ASC ';
        $reponse = $con->query($sql);
?>


 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Chambre Info</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            ...
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </div>
    </div>
    </div>





<div class="container">
<br>

<div class="row">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input id="search" type="text" class="form-control" placeholder="Search">
            </div>
        </div>
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
                            <th>Type d'hébergement</th>
                            <th>Pour</th>
                            <th>Prix</th>
                            <th>Devise</th>
                            <th>Vue</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if ($reponse->rowCount()>0)
                            {
                                while ($ligne = $reponse->fetch(PDO::FETCH_ASSOC))
                                {
                                    echo "<tr>";
                                    echo '<td><a href="" data-toggle="modal" data-target="#exampleModal">'.$ligne['id']."</td>";
                                    echo "<td>".$ligne['typeheb']."</td>";
                                    echo "<td>".$ligne['pour']."</td>";
                                    echo "<td>".$ligne['prix']."</td>";
                                    echo "<td>".$ligne['devise']."</td>";
                                    echo "<td>".$ligne['vue']."</td>";
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
<script src="js/main2.js"></script>
<script src="js/main3.js"></script>
</body>
</html>