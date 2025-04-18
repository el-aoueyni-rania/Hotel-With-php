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
    <title>Services</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body class="bd">
<?php include 'connexion.php' ?> 
<?php include_once 'templates/navbar2.php' ?>
<br><br><br><br>
<div class="input-group flex-nowrap">
  <span class="input-group-text" id="addon-wrapping"><i class="fas fa-search"></i></span>
  <input type="text" class="form-control" id="search" placeholder="Search">
</div>
<div id="zone">
<ul  class="amenagement clearfix lu">
        <li class="il">
         Ascenseur
        </li>
        <li class="il">
             Assistance médicale
        </li>
        <li class="il">
            <i class="fas fa-glass-cheers"></i> Bar
        </li>
        <li class="il">
        <i class="fas fa-store-alt"></i> Boutique Tabac
        </li>
        <li class="il">
        <i class="fas fa-coffee"></i> Café Maure
        </li>
        <li class="il">
        <i class="fas fa-building"></i> Centre d'affaires
        </li>
        <li class="il">
        <i class="fas fa-running"></i>
            Centre de remise en forme
        </li>
        <li class="il">
            Change
        </li>
        <li class="il">
            Climatisation Centrale
        </li>
        <li class="il">
        <i class="far fa-treasure-chest"></i>
            Coffre Fort
        </li>
        <li class="il">
        <i class="fas fa-male"></i>
            Conciergerie
        </li>
        <li class="il">
        <i class="fas fa-building"></i>
            Equipements pour conférences
        </li>
        <li class="il">
        <i class="fas fa-fax"></i></i>
            Fax/photocopieur
        </li>
        <li class="il">
        <i class="fas fa-baby"></i>
            Garderie d'enfants
        </li>
        <li class="il">
        <i class="fas fa-golf-club"></i>
            Golf
        </li>
        <li class="il">
        
            Hammam
        </li>
        <li class="il">
        <i class="fas fa-hot-tub"></i>
            Jacuzzi
        </li>
        <li class="il">
        <i class="fas fa-spa"></i>
            Massage
        </li>
        <li class="il">
        <i class="fas fa-glass-cheers"></i>
            Mini Bar
        </li>
        <li class="il">
        <i class="fas fa-parking"></i>
            Parking gratuit
        </li>
        <li class="il">
        <i class="fas fa-parking"></i>
            Parking payant
        </li>
        <li class="il">
        <i class="fas fa-swimming-pool"></i>
            Piscine Couverte
        </li>
        <li class="il">
        <i class="fas fa-swimming-pool"></i>
            Piscine Extérieure
        </li>
        <li class="il">
        <i class="fas fa-umbrella-beach"></i>
            Plage
        </li>
        <li class="il">
        <i class="fas fa-utensils"></i>
            Restaurant
        </li>
        <li class="il">
        <i class="fas fa-utensils"></i>
            Restaurant à la Carte
        </li>
        <li class="il">
        <i class="fas fa-walking"></i>
            Salle de Fitness
        </li>
        <li class="il">
            Salle de Réunion
        </li>
        <li class="il">
            Salon d'acceuil pour VIP
        </li>
        <li class="il">
        <i class="fas fa-hot-tub"></i>
            Sauna
        </li>
        <li class="il">
            Sèche-cheveux
        </li>
        <li class="il">
        <i class="fas fa-glass-cheers"></i>
            Snack Bar
        </li>
        <li class="il">
        <i class="fas fa-table-tennis"></i>
            Tennis
        </li>
        <li class="il">
        <i class="fas fa-tv"></i>
            TV Satellite
        </li>


    </ul>
</div>


<?php include_once 'templates/footer.html' ?>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/main1.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>