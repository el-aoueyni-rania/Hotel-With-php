<header>
        <div >
            <nav class="navbar navbar-light navbar-expand-lg transbox" >
            <img  class="k" style=" width : 50px ; height : 50px  " src="images/logo4.jpg"/><h4 style="padding-left : 5px"  class="ft" > La Cigale Tabarka</h4>
                <div class="collapse navbar-collapse show" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto">
                    <li class=
                    "nav-item"><a class=" nav-link active" href="accueil.php"><i class="fas fa-home"></i></a></li>
                        <li class="nav-item"><a class="nav-link active" href="home.php">ACCUEIL</a></li>
                        <li class="nav-item"><a class="nav-link active" href="services.php">SERVICE</a></li>
                        <li class="nav-item"><a class="nav-link active" href="chambre.php">CHAMBRE</a></li>
                        <li class="nav-item"><a class="nav-link active" href="reservation.php">RESERVATION</a></li>
                        <li class="nav-item"><a class="nav-link active" href="gallerie.php">GALLERIE</a></li>
                    </ul>
                <ul class="navbar-nav">
                  <li>
                    <img style=" width : 50px ; height : 50px ; border: 2px solid black ; " src="images/<?= $ligne['user_image']?>"/>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Bienvenue <?= $ligne['user_name'] ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="deconnecter.php">Deconnexion</a>
                    </div>
                  </li>
                </ul>
                </div>
            </nav>
        </div>
    </header>