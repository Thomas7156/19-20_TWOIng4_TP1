<!doctype html>
<html lang="fr">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Site CV Thomas Lemercier</title>

  <!-- Bootstrap from MDB.com -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

  <!-- Scripts Jquery pour le modal -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <!-- Fonctions javascript -->
  <script>
  function move(id, taille) {
    var elem = document.getElementById(id);
    var width = 0;
    var id = setInterval(frame, 10);
    function frame() {
      if (width >= taille) {
        clearInterval(id);
      } else {
        width++;
        elem.style.width = width + '%';
      }
    }
  }
  </script>
</head>

<body style="background-image: url(img/homescreen.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">

  <header style="background-color:rgba(0, 0, 0, 0.4);">

    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg winter-neva-gradient default-color">
      <img class="rounded-circle" src="img/Thomas.png" width="45" height="60"/>
      <a class="navbar-brand" href="#">Thomas Lemercier</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
      aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php">Accueil
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link text-white" href="Formations.php">Mon parcous</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="Experiences.php">Mes expériences</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="Interets.php">Mes centres d'intérêts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="SkillsLang.php">Compétences & Linguistique</a>
        </li>
        <li class="nav-item">
          <!-- <button type="button" class="btn blue-gradient btn-rounded" data-toggle="modal" data-target="#modalContactForm">Me contacter</button> -->
          <a class="nav-link cyan-text" href="#modalContactForm" data-toggle="modal" data-target="#modalContactForm">Me contacter</a>
        </li>

        <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header text-center">
              <h4 class="modal-title w-100 font-weight-bold">Ecrivez-moi !</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <form class="modal-body mx-3" action="Form.php" method="post">
              <div class="md-form mb-5">
                <i class="fas fa-user prefix grey-text"></i>
                <input type="text" id="form34" class="form-control validate mx-5" name="Nom" required>
                <label data-error="wrong" data-success="right" for="form34">Votre nom</label>
              </div>

              <div class="md-form mb-5">
                <i class="fas fa-envelope prefix grey-text"></i>
                <input type="email" id="form29" class="form-control validate mx-5" name="Mail" required>
                <label data-error="wrong" data-success="right" for="form29">Votre E-mail</label>
              </div>

              <div class="md-form mb-5">
                <i class="fas fa-tag prefix grey-text"></i>
                <input type="text" id="form32" class="form-control validate mx-5" name="Objet" required>
                <label data-error="wrong" data-success="right" for="form32">Objet</label>
              </div>

              <div class="md-form">
                <i class="fas fa-pencil prefix grey-text"></i>
                <textarea type="text" id="form8" class="md-textarea form-control" name="Message" rows="4" required></textarea>
                <label data-error="wrong" data-success="right" for="form8">Votre message</label>
              </div>

              <div class="modal-footer d-flex justify-content-center">
                <button type="submit "class="btn btn-primary btn-rounded blue-gradient" id="sent">Envoyer <i class="fas fa-paper-plane-o ml-1"></i></button>
                <!-- Comprends pas pq l'alternative avec le input ne marche pas -->
                <!-- <input type="submit "class="btn btn-primary btn-rounded" value="Envoyer"/> -->
              </div>
            </form>

          </div>
        </div>
      </div>
      <!-- <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
      aria-haspopup="true" aria-expanded="false">Dropdown
    </a>
    <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</li> -->
</ul>
<ul class="navbar-nav ml-auto nav-flex-icons">
  <li class="nav-item">
    <a class="nav-link waves-effect waves-light cyan-text" href="https://www.facebook.com/thomas.lemercier.5">
      <i class="fab fa-facebook-f"></i>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link waves-effect waves-light cyan-text" href="https://www.linkedin.com/in/thomas-lemercier-875869150">
      <i class="fab fa-linkedin-in"></i>
    </a>
  </li>
  <!-- <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
  aria-haspopup="true" aria-expanded="false">
  <i class="fas fa-user"></i>
</a>
<div class="dropdown-menu dropdown-menu-right dropdown-default"
aria-labelledby="navbarDropdownMenuLink-333">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</li> -->
</ul>
</div>
</nav>
<!--/.Navbar -->

</header>

<main style="background-color:rgba(0, 0, 0, 0.01);">

  <!-- Card deck -->
<div class="card-deck w-responsive text-center mx-auto mt-5">

  <!-- Card -->
  <div class="card mb-5 zoom" style="background-color:rgba(0, 0, 0, 0.3);">

    <!--Card image-->
    <div class="view overlay flex-center mt-2">
      <img class="card-img-top" style="width: 325px; height: 162px;" src="img/MJ.jpg" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title cyan-text">Baccalauréat S</h4>
      <!--Text-->
      <p class="card-text white-text">J'ai effectué un baccalauréat S au lycée Moulin Joli sur L'Île de La Réunion, que j'ai obtenue avec les félicitations du jury et une moyenne de 18,07/20</p>

      <div class="progress mt-3">
        <div class="progress-bar" id="bar1" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
          <p class="text-dark text-center mt-3">Terminé</p>
          <script>
          window.onload = move("bar1", "100");
          </script>
        </div>
      </div>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-5 zoom" style="background-color:rgba(0, 0, 0, 0.3);">

    <!--Card image-->
    <div class="view overlay flex-center mt-2">
      <img class="card-img-top" style="width: 325px; height: 162px;" src="img/ECE_Paris.png" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title cyan-text">Diplôme d'ingénieur</h4>
      <!--Text-->
      <p class="card-text white-text">Actuellement en 4ème année d'école d'ingénieur à l'ECE Paris. Je me suis spécialisé en OCRES, Objets Connectées Réseaux Et Services.</p>

      <div class="progress mt-3">
        <div class="progress-bar" id="bar2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
          <p class="text-dark text-center mt-3">En cours</p>
          <script>
          window.onload = move("bar2", "60");
          </script>
        </div>
      </div>

    </div>

  </div>
  <!-- Card -->

</div>
<!-- Card deck -->

</main>

<footer class="fixed-bottom page-footer blue darken-3">

  <div class="py-3 flex-center">

    <!-- Facebook -->
    <a class="fb-ic" href="https://www.facebook.com/thomas.lemercier.5">
      <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
    </a>
    <!--Linkedin -->
    <a class="li-ic" href="https://www.linkedin.com/in/thomas-lemercier-875869150">
      <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x"> </i>
    </a>

  </div>

  <div class="footer-copyright text-center py-3">© 2019 Copyright:
    <a href="https://www.ece.fr/ecole-ingenieur/">ECE Paris</a>
  </div>

</footer>
</body>

</html>
