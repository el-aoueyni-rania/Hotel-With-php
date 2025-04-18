<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Description</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
    <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body, html {
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
    }
    

    .hero {
      background-image: url('https://cdn2.tqsan.com/lacigale/wp-content/uploads/2016/07/slider-accueil-2.jpg.webp'); 
      background-size: cover;
      background-position: center;
      height: 100vh;
      position: relative;
      color: white;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      text-align: center;
    }

  </style>
</head>
<body class="bod">
<?php include_once 'templates/navbar1.php' ?>


<div class="hero">
    <div class="hero-content">
    <br> <br>
<p class="hh transbox">
    La Cigale Tabarka situé dans la ville côtière tunisienne de Tabarka, l'établissement La Cigale Tabarka se trouve à
    seulement 20 mètres de la plage. Il est pourvu de 2 piscines extérieures et d'une terrasse offrant
    une vue sur la mer.
    <br>
    Les chambres sont dotées de la climatisation, d'une télévision par satellite
    et d'un balcon ou d'une terrasse. Le restaurant sur place sert une cuisine traditionnelle sous
    forme de buffet. 
    <br>
    Vous pourrez également profiter du centre de thalassothérapie installé sur place,
    L'établissement possède un accès direct à des courts de tennis et au parcours de golf de Tabarka.
    <br>
    Vous pourrez faire de la plongée sous-marine et de l'équitation dans les environs.
</p>    </div>
</div>






    <?php include_once 'templates/footer.html' ?>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>