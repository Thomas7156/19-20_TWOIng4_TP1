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
          <a class="nav-link" href="Interets.php">Mes centres d'intérêts</a>
        </li>

        <li class="nav-item">
          <a class="nav-link active" href="SkillsLang.php">Compétences & Linguistique</a>
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
<div class="card-deck w-responsive text-center mx-auto mt-5">

  <!-- Card -->
  <div class="card mb-5 zoom">

    <!--Card image-->
    <div class="view overlay flex-center mt-2">
      <img class="card-img-top" style="width: 325px; height: 162px;" src="img/france-flag.gif" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Français</h4>
      <!--Text-->
      <p class="card-text">Langue native que je maîtrise donc à 100%, bien qu'il reste toujours impossible de maîtriser une langue à la perfection.</p>

      <div class="progress mt-3">
        <div class="progress-bar" id="bar1" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
          <p class="text-dark text-center mt-3">100%</p>
          <script>
          window.onload = move("bar1", "100");
          </script>
        </div>
      </div>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-5 zoom">

    <!--Card image-->
    <div class="view overlay flex-center mt-2">
      <img class="card-img-top" style="width: 325px; height: 162px;" src="img/anglais.gif" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Anglais</h4>
      <!--Text-->
      <p class="card-text">Langue que je maitrîse très bien (presque bilingue) et que j'ai pu consolider lors de mes études à l'étranger.</p>

      <div class="progress mt-3">
        <div class="progress-bar" id="bar2" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
          <p class="text-dark text-center mt-3">80%</p>
          <script>
          window.onload = move("bar2", "80");
          </script>
        </div>
      </div>

    </div>

  </div>
  <!-- Card -->

  <!-- Card -->
  <div class="card mb-5 zoom">

    <!--Card image-->
    <div class="view overlay flex-center mt-2">
      <img class="card-img-top" style="width: 325px; height: 162px;" src="img/espagnol.gif" alt="Card image cap">
        <div class="mask rgba-white-slight"></div>
      </a>
    </div>

    <!--Card content-->
    <div class="card-body">

      <!--Title-->
      <h4 class="card-title">Espagnol</h4>
      <!--Text-->
      <p class="card-text">Langue dans laquelle de très bonnes bases sont acquises, mais que je ne pratique plus assez malheureusement.</p>

      <div class="progress mt-3">
        <div class="progress-bar" id="bar3" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
          <p class="text-dark text-center mt-3">40%</p>
          <script>
          window.onload = move("bar3", "40");
          </script>
        </div>
      </div>

    </div>

  </div>
  <!-- Card -->

</div>
<!-- Card deck -->

<!-- Card deck -->
<div class="card-deck w-responsive text-center mx-auto mt-2">

<!-- Card -->
<div class="card mb-5 zoom">

  <!--Card image-->
  <div class="view overlay flex-center mt-2">
    <img class="card-img-top" style="width: 325px; height: 162px;" src="img/prog1.jpg" alt="Card image cap">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!--Card content-->
  <div class="card-body">

    <!--Title-->
    <h4 class="card-title">C/C++/Java</h4>
    <!--Text-->
    <p class="card-text">Trois language de programmation que je matrise correctement, particulièrement le C et C++, et que j'ai développé pendant mes années d'études.</p>

    <div class="progress mt-3">
      <div class="progress-bar" id="bar4" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <p class="text-dark text-center mt-3">75%</p>
        <script>
        window.onload = move("bar4", "75");
        </script>
      </div>
    </div>

  </div>

</div>
<!-- Card -->

<!-- Card -->
<div class="card mb-5 zoom">

  <!--Card image-->
  <div class="view overlay flex-center mt-2">
    <img class="card-img-top" style="width: 325px; height: 162px;" src="img/prog2.jpg" alt="Card image cap">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!--Card content-->
  <div class="card-body">

    <!--Title-->
    <h4 class="card-title">HTML/CSS/Php</h4>
    <!--Text-->
    <p class="card-text">Language web que je matrise correctement, à voir le résultat de mon site. J'ai également développé des connaissances en BDD sql.</p>

    <div class="progress mt-3">
      <div class="progress-bar" id="bar5" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <p class="text-dark text-center mt-3">80%</p>
        <script>
        window.onload = move("bar5", "80");
        </script>
      </div>
    </div>

  </div>

</div>
<!-- Card -->

<!-- Card -->
<div class="card mb-5 zoom">

  <!--Card image-->
  <div class="view overlay flex-center mt-2">
    <img class="card-img-top" style="width: 325px; height: 162px;" src="img/packoffice.png" alt="Card image cap">
      <div class="mask rgba-white-slight"></div>
    </a>
  </div>

  <!--Card content-->
  <div class="card-body">

    <!--Title-->
    <h4 class="card-title">Pack Office</h4>
    <!--Text-->
    <p class="card-text">J'ai également une maitrise du pack office, plus particulièrement en PPT et Word, bien qu'excel ne me fasse pas peur !</p>

    <div class="progress mt-3">
      <div class="progress-bar" id="bar6" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
        <p class="text-dark text-center mt-3">90%</p>
        <script>
        window.onload = move("bar6", "90");
        </script>
      </div>
    </div>

  </div>

</div>
<!-- Card -->

</div>
<!-- Card deck -->

</main>

<footer class="position-relative fixed-bottom page-footer blue darken-3">

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
