<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="css/style2.css">
</head>
<body class="bd">
<?php include 'connexion.php' ?> 
<?php include 'utilities.php' ?>
<?php include_once 'templates/navbar1.php' ?>

<?php 
        if (!empty($_POST)) {
            $umail = test_input($_POST['mail']);
            $upass = test_input($_POST['pass']);
            $sql = "SELECT * FROM users WHERE user_email=? LIMIT 1";
            $req = $con->prepare($sql);
            $req->execute([$umail]);
            $ligne = $req->fetch(PDO::FETCH_ASSOC);
            if (password_verify($upass, $ligne['user_pass'])) {
                $_SESSION['user_session'] = $ligne['user_id'];
                header('Location:home.php');
            } else {
                $error = "informations erronées !";
            }
        }
    ?>

<br> <br>
<div class="signin-form">
	<div class="container">	
        <br><br>	
	<form class="form-signin" method="post">
                <h2 class="ll">
					Connexion
                </h2>
    <hr>


    <div id="error">
        <?php
			if(isset($error))
			{
				?>
                <div class="alert alert-danger">
                 <i class="fas fa-exclamation-triangle"></i> <?php echo $error; ?> !
                </div>
                <?php
			}
		?>
        </div>
				<div class="form-group">
                        
					<input class="form-control" type="text" name="mail" placeholder="Email">
				</div>
				<div class="form_group">
					<input class="form-control" type="password" name="pass" placeholder="Mot De Passe">
				</div>
    <hr>
				<div class="form_group">
					<button class="btn btn-secondary btn-lg">
                    <i class="fas fa-sign-in-alt"></i>
						Connexion
                    </button>
                </div>
                <br>
                <div class="form_group">
                    <label for=""> Vous n'avez pas de compte !</label>
                        <a class=" fas fa-user-plus nav-link ll" href="inscription.php">Inscription</a>
                </div>			
    </form>
	</div>
	</div>





<?php include_once 'templates/footer.html' ?>


<script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>