<?php
include 'connexion.php';

$ch = $_GET['search'];

$sql="SELECT* from service where nomserv LIKE '%$ch%'";

$reponse=$con->query($sql);
$services=$reponse->fetchAll();

foreach ($services as $service)
{
    echo "<ul>";
    echo "<li>".$service['nomserv']."</li>";
    echo "</ul>";
}


?>