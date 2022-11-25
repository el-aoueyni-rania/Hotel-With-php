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
    <title>Home</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
    <style>



</style>
</head>
<body class="bd">
<?php include 'connexion.php' ?> 
<?php include_once 'templates/navbar2.php' ?>
<br><br><br><br>
<section style="  display: grid; grid-template-columns: 2.5fr 2.5fr 2.5fr 2.5fr;">
    <div>
    <img class="k " style=" height : 300px ; width : 300px ; opacity : 0.6 " src="images\1.jpg"/> 
    <h3 style="position: absolute ; top: 50% ; left : 2% ;"> <a style=" color : black ; font-size : 25px ; text-decoration: underline;"></a></h3>
    </div>
    <div>
    <img class="k " style=" height : 300px ; width : 300px ; opacity : 0.6 " src="images\2.png"/> 
    <h3 style="position: absolute ; top: 50% ; left : 26% ;"> <a style=" color : black ; font-size : 25px ; text-decoration: underline;" ></a></h3>
    </div>
    <div>
    <img class="k " style=" height : 300px ; width : 300px ; opacity : 0.6 " src="images\3.png"/> 
    <h3 style="position: absolute ; top: 50% ; left : 51% ;"> <a style=" color : black ; font-size : 23px ; text-decoration: underline;" ></a></h3>
    </div>
    <div>
    <img class="k " style=" height : 300px ; width : 300px ; opacity : 0.6 " src="images\4.jpg"/> 
    <h3 style="position: absolute ; top: 50% ; left : 78% ;"> <a style=" color : black ; font-size : 30px ; text-decoration: underline;"></a></h3>
    </div>
    <div>
    <img class="k " style=" height : 300px ; width : 300px ; opacity : 0.6 " src="images\5.jpg"/> 
    <h3 style="position: absolute ; top: 50% ; left : 78% ;"> <a style=" color : black ; font-size : 30px ; text-decoration: underline;" ></a></h3>
    </div><div>
    <img class="k " style=" height : 300px ; width : 300px ; opacity : 0.6 " src="images\6.jpg"/> 
    <h3 style="position: absolute ; top: 50% ; left : 78% ;"> <a style=" color : black ; font-size : 30px ; text-decoration: underline;" ></a></h3>
    </div><div>
    <img class="k " style=" height : 300px ; width : 300px ; opacity : 0.6 " src="images\7.jpg"/> 
    <h3 style="position: absolute ; top: 50% ; left : 78% ;"> <a style=" color : black ; font-size : 30px ; text-decoration: underline;" ></a></h3>
    </div><div>
    <img class="k " style=" height : 300px ; width : 300px ; opacity : 0.6 " src="images\10.jpg"/> 
    <h3 style="position: absolute ; top: 50% ; left : 78% ;"> <a style=" color : black ; font-size : 30px ; text-decoration: underline;" ></a></h3>
    </div>
    <br> <br>
</section>




<?php include_once 'templates/footer.html' ?>


<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>