<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/style2.css">
</head>
<body class="bd" >
<?php include_once 'templates/navbar1.php' ?>
<br>
    <?php
	$nom = $email = $tel = $message = "";
	$nomErr = $emailErr = $msgErr = "";
	if (!empty($_POST)) {
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$valid=true;
		if (empty($_POST["nom"])) {
				$nomErr = "Le nom est obligatoire";
				$valid=false;
			} else {
									$nom=test_input($_POST['nom']);
									if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
									  $nomErr = "Seuls les lettres et l'espace sont permis";
										$valid=false;
									}
								}
		if (empty($_POST["email"])) {
				$emailErr = "Adresse mail obligatoire";
				$valid=false;
			} else {
									$email=test_input($_POST['email']);
									if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
									  $emailErr = "Format adresse mail invalide";
										$valid=false;
									}
								}
		if (empty($_POST["message"])) {
				$msgErr = "Message obligatoire";
				$valid=false;
			} else {
									$message=test_input($_POST['message']);
								}
		if (!empty($_POST['tel'])) {
			$tel = test_input($_POST['tel']);
		}

		if ($valid) {
			header('Location:envoi.php');
			exit;
		}
	}
	 ?>
<div class="container">
	<br><br><br>
        <fieldset>
			<legend>Pour toutes information veuillez nous contacter : </legend>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                <div class="text-danger">
                </div>
                <div class="form-group">
                    <label for="nom"> Nom: <span class="text-danger">* <?php echo $nomErr;?></span></label>
                    <input type="text" name="nom" id="nom" class="form-control" value="<?php echo $nom?>" placeholder="Votre nom & prénom"  />
                </div>
                <div class="form-group">
                    <label for="email"> Email: <span class="text-danger">* <?php echo $emailErr;?></span></label>
                    <input type="text" name="email" id="email" class="form-control" value="<?php echo $email?>"  placeholder="personne@exemple.xy"/>
                </div>
                <div class="form-group">
                    <label for="tel">Téléphone:</label>
                    <input type="number" name="tel" id="tel" class="form-control" value="<?php echo $tel?>" placeholder="(+216)">
                </div>
                <div class="form-group">
                    <label for="message"> Votre Message: <span class="text-danger">* <?php 	echo $msgErr;?></span></label>
                    <textarea name="message" id="message" cols="40" rows="6"class="form-control" value="<?php echo $message?>" placeholder="Votre message" ></textarea>
                </div>
                <input type="submit" class="btn btn-secondary" value="Envoyer" />
            </form>
		</fieldset>
    </div>
    <br> <br><br><br>
    <?php include_once 'templates/footer.html' ?>
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>