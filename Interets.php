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
</head>

<body>

  <header class="header">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <img class="rounded-circle" src="img/Thomas.png" width="45" height="60"/>

      <a class="navbar-brand" href="#">Thomas Lemercier</a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="nav nav-tabs mt-2">

        <li class="nav-item">
          <a class="nav-link" href="index.php">Accueil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Formations.php">Mon parcours</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="Experiences.php">Mes expériences</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="Interets.php">Mes centres d'intérêts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="SkillsLang.php">Compétences & Linguistique</a>
        </li>

        <li class="text-center">
          <button class="btn btn-primary btn-rounded" data-toggle="modal" data-target="#modalContactForm">Me contacter</button>
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
                <button type="submit "class="btn btn-primary btn-rounded" id="sent">Envoyer <i class="fas fa-paper-plane-o ml-1"></i></button>
                <!-- Comprends pas pq l'alternative avec le input ne marche pas -->
                <!-- <input type="submit "class="btn btn-primary btn-rounded" value="Envoyer"/> -->
              </div>
            </form>

          </div>
        </div>
      </div>

  </ul>

</div>
</nav>
</header>

<main>

  <!-- Card deck -->
<div class="card-deck w-responsive h-responsive text-center mx-auto p-5">

  <!-- Card -->
  <div class="card mb-4 zoom">

    <!--Card image-->
    <div class="view overlay w-auto h-auto d-inline-block">
      <img class="card-img-top" style="width: 200px; height: 100px;" src="img/calisthenics.jpg" alt="Card image cap">
      <a href="https://fr.wikipedia.org/wiki/Callisth%C3%A9nie">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Calisthenics & Musculation</h4>
      <!--Text-->
      <p class="card-text">La callisthénie est une pratique consistant en un ensemble d'exercices physiques de gymnastique et de musculation,
        visant à l'amélioration des capacités physiques et de l'esthétique du corps.
        Selon les époques et les pays, les formes et définitions de la callisthénie ont varié.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <a type="button" class="btn btn-blue btn-md" href="https://fr.wikipedia.org/wiki/Callisth%C3%A9nie">En savoir plus</a>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4 zoom">

    <!--Card image-->
    <div class="view overlay w-auto h-auto d-inline-block">
      <img class="card-img-top" src="img/guitare.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Musique</h4>
      <!--Text-->
      <p class="card-text">La musique est un art et une activité culturelle consistant à combiner sons et silences au cours du temps.
        Les ingrédients principaux sont le rythme, la hauteur, les nuances et le timbre.
        Elle est aujourd'hui considérée comme une forme de poésie moderne.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-blue btn-md">En savoir plus</button>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-4 zoom">

    <!--Card image-->
    <div class="view overlay w-auto h-auto d-inline-block">
      <img class="card-img-top" src="img/co.jpg" alt="Card image cap">
      <a href="#!">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Objets connectés & Nouvelles technologies</h4>
      <!--Text-->
      <p class="card-text">L'Internet of Things, ou IoT est l'interconnexion entre Internet et des objets, des lieux et des environnements physiques.
        L'appellation désigne un nombre croissant d'objets connectés à Internet permettant ainsi une communication entre nos biens dits physiques et leurs existences numériques.</p>
      <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
      <button type="button" class="btn btn-blue btn-md">En savoir plus</button>

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
