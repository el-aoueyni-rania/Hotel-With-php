<?php
    include "connexion.php";
    include 'utilities.php';
    $id = $_GET['id'];
    $arrivée = test_input($_POST['arrivée']);
    $nuits = test_input($_POST['nuits']);
    $nbrchambre = test_input($_POST['nbrchambre']);
    $nbradulte = test_input($_POST['nbradulte']);
    $nbrenfant = test_input($_POST['nbrenfant']);
    $sql = "UPDATE reservation SET arrivée = ? , nuits = ?, nbrch = ?, adulte = ?, enfant = ? WHERE id = ?";
    $req = $con->prepare($sql);
    $req->execute([$arrivée , $nuits , $nbrchambre , $nbradulte , $nbrenfant , $id]);
    header('location:reservation.php');
?>