<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
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
            $uname = test_input($_POST['namee']);
            $umail = test_input($_POST['email']);
            $upass = test_input($_POST['password']); 
            if($uname=="") {
                $errors[] = "Vous devez saisir un nom d'utilisateur!"; 
            } else if ($umail=="") {
                $errors[] = "Vous devez saisir un email"; 
            } else if (!filter_var($umail, FILTER_VALIDATE_EMAIL)) {
                $errors[] = 'Vous devez saisir un email valide';
            } else if($upass=="") {
                $errors[] = "Vous devez saisir un mot de passe";
            } else if(strlen($upass) < 6) {
                $errors[] = "Le mot de passe doit avoir au moins 6 caractères"; 
            } else {
                $sql = "SELECT * FROM users WHERE user_name = ? OR user_email = ?";
                $req = $con->prepare($sql);
                $req->execute([$uname, $umail]);
                $ligne = $req->fetch(PDO::FETCH_ASSOC);
                if($ligne['user_name'] == $uname) {
                    $errors[] = "Désolé, le nom d'utilisateur existe déjà !";
                }
                else if($ligne['user_email'] == $umail) {
                    $errors[] = "Désolé, l'email existe déjà";
                } else {
                    $nomf = $_FILES['myFile']['name'];
                    $type = $_FILES['myFile']['type'];
                    $size = $_FILES['myFile']['size'];
                    $temp = $_FILES['myFile']['tmp_name'];
                    $path = 'images/' . $nomf;
                    move_uploaded_file($temp, $path);

                    $new_password = password_hash($upass, PASSWORD_DEFAULT);

                    $sql = "INSERT INTO users(user_name,user_email,user_pass,user_image) VALUES(? , ? , ? , ?)";
                    $req = $con->prepare($sql);
                    $res = $req->execute([$uname, $umail, $new_password,$nomf]);
                    if ($res)
                    {
                        header('Location:index.php');
                    }
                }
            }
        }
    ?>

<br> <br>
<div class="signin-form">
	<div class="container">
        <br><br>
	    <form class="form-signin" method="post" enctype="multipart/form-data">
                <h2 class="ll">
					Inscription
                </h2>
                <?php
                        if(isset($errors))
                        {
                             foreach($errors as $error)
                             {
                                 ?>
                                    <div class="alert alert-danger">
                                        <i class="fas fa-exclamation-triangle"></i> <?php echo $error; ?>
                                    </div>
                                 <?php
                            }
                        }
                    ?>
            <hr>
                    <div class="form-group">
                          <input class="form-control" type="text" name="namee" placeholder="saisir votre nom">
                    </div>
                    <div class="form-group">   
                        <input class="form-control" type="text" name="email" placeholder="saisir votre Email">
                    </div>
                    <div class="form_group">
                        <input class="form-control" type="password" name="password" placeholder=" saisir votre Mot De Passe">
                    </div>
                    <div>
                        <label for="fichier">Image</label>
                        <input type="file" name="myFile" id="fichier">
                    </div>
            <hr>
                    <div class="form_group">
                        <button class="btn btn-secondary btn-lg">
                        <i class="fas fa-user-plus"></i>
                            S'inscrire
                        </button>
                    </div>
                    <br>
                    <div class="form_group">
                        <label for=""> Déjà inscrit !</label>
                            <a class=" fas fa-sign-in-alt nav-link ll" href="index.php">Connexion</a>
                    </div>			
        </form>
    </div>
</div>
      
    <?php include_once 'templates/footer.html' ?> 
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>