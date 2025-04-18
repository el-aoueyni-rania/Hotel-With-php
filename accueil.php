<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Accueil</title>
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
      background-image: url('https://cdn2.tqsan.com/lacigale/wp-content/uploads/2016/07/slide-accueil.jpg.webp'); 
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

    .hero h1 {
      font-size: 3em;
      font-weight: 300;
    }
  </style>

</head>

<body class="bod">
<?php include_once 'templates/navbar1.php' ?>


<div class="hero">
    <div class="hero-content">
      <h1>Une expérience exceptionnelle à vivre</h1>
    </div>
</div>


<?php include_once 'templates/footer.html' ?>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>