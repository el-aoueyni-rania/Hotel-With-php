<?php

    $search = $_GET['search'];


    // Récupérer la liste des clients correspondants selon les critères de recherche

    // Connexion au serveur de Bases de Données
    include 'connexion.php';
    
    // Préparer la requête SQL
    $sql = "SELECT * FROM chambre WHERE typeheb LIKE '%$search%'";

    // Envoyer la requête au serveur
    $reponse = $con->query($sql);

    // Transformer le résulat de la requête vers un tableau associatif
    $listChambre = $reponse->fetchAll();

    // Sérialisation JSON de la liste des clients et envoi dans la réponse HTTP.
    echo json_encode($listChambre);
?>