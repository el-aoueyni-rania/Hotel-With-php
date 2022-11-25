<?php
$id = $_GET['id'];

// Connexion au serveur de Bases de Données
include 'connexion.php';
    
// Préparer la requête SQL
$sql = "SELECT * FROM chambre WHERE id = $id";

// Envoyer la requête au serveur
$reponse = $con->query($sql);

$ligne = $reponse->fetch(PDO::FETCH_ASSOC);



echo '<img style=" width : 470px ; height : 200px ; border: 2px solid black ; " src=" ' . $ligne['photos'] . '"/>' ;
echo '<div class="card-header">' . ' Type : ' . $ligne['typeheb'] . '<br> Nombre de personnes : ' . $ligne['pour']. '<br> Prix :  ' . $ligne['prix'] . ' '. $ligne['devise']  .'</div>';

?>