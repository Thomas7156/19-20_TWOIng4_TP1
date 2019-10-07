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

<body style="background-image: url(img/reunion5.jpg); background-repeat: no-repeat; background-size: cover; background-position: center center;">

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
        <li class="nav-item active">
          <a class="nav-link text-white" href="index.php">Accueil
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
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

<main style="background-color:rgba(0, 0, 0, 0.3);">
  <div class="d-flex flex-column">

    <div class="d-flex h-25 d-inline-block flex-row">
      <div class="z-depth-3 w-75 mt-2 ml-2 mr-2 mb-2">
        <!--Carousel Wrapper-->
        <div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
          <!--Indicators-->
          <ol class="carousel-indicators">
            <li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
            <li data-target="#video-carousel-example2" data-slide-to="1"></li>
            <li data-target="#video-carousel-example2" data-slide-to="2"></li>
          </ol>
          <!--/.Indicators-->
          <!--Slides-->
          <div class="carousel-inner" role="listbox">
            <!-- First slide -->
            <div class="carousel-item active">
              <!--Mask color-->
              <div class="view flex-center">
                <!--Video source-->
                <video class="video-fluid" style="width: 650px; height: 310px;" autoplay loop muted>
                  <source src="img/reunionvideo.mp4" type="video/mp4" />
                </video>
                <div class="mask rgba-indigo-light"></div>
              </div>

              <!--Caption-->
              <div class="carousel-caption">
                <div class="animated fadeInDown">
                  <h3 class="h3-responsive">L'Île de La Réunion</h3>
                  <p>Mon paradis</p>
                </div>
              </div>
              <!--Caption-->
            </div>
            <!-- /.First slide -->

            <!-- Second slide -->
            <div class="carousel-item">
              <!--Mask color-->
              <div class="view flex-center">
                <!--Video source-->
                <img class="img-fluid" src="img/calisthenics.jpg" style="width: 650px; height: 310px;"/>
                <div class="mask rgba-purple-slight"></div>
              </div>

              <!--Caption-->
              <div class="carousel-caption">
                <div class="animated fadeInDown">
                  <h3 class="h3-responsive">Calisthenics</h3>
                  <p>Parce que le sport c'est important</p>
                </div>
              </div>
              <!--Caption-->
            </div>
            <!-- /.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item">
              <!--Mask color-->
              <div class="view flex-center">
                <!--Video source-->
                <img class="img-fluid" src="img/objetsco.jpg" style="width: 650px; height: 310px;"/>
                <div class="mask rgba-purple-slight"></div>
              </div>

              <!--Caption-->
              <div class="carousel-caption">
                <div class="animated fadeInDown">
                  <h3 class="h3-responsive">Nouvelles Technologies</h3>
                  <p>Parce que le monde change</p>
                </div>
              </div>
              <!--Caption-->
            </div>
            <!-- /.Third slide -->
          </div>
          <!--/.Slides-->
          <!--Controls-->
          <a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
          <!--/.Controls-->
        </div>
        <!--Carousel Wrapper-->
      </div>

      <aside class="z-depth-3 w-25 mt-2 mb-2 mr-2">
        <ul class="nav nav-pills mb-3 mt-1 ml-1" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
            aria-controls="pills-home" aria-selected="true">Qui je suis ?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
            aria-controls="pills-profile" aria-selected="false">D'où je viens ?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
            aria-controls="pills-contact" aria-selected="false">Où j'en suis ?</a>
          </li>
        </ul>
        <div class="tab-content pt-1 pl-2 pb-2 text-center white-text" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">Consequat
            occaecat ullamco amet non eiusmod nostrud dolore irure incididunt est duis anim sunt officia. Fugiat
            velit proident aliquip nisi incididunt nostrud exercitation proident est nisi. Irure magna elit commodo
            anim ex veniam culpa eiusmod id nostrud sit cupidatat in veniam ad. Eiusmod consequat eu adipisicing
            minim anim aliquip cupidatat culpa excepteur quis. Occaecat sit eu exercitation irure Lorem incididunt
            nostrud.
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Ad
            pariatur nostrud pariatur exercitation ipsum ipsum culpa mollit commodo mollit ex. Aute sunt incididunt
            amet commodo est sint nisi deserunt pariatur do. Aliquip ex eiusmod voluptate exercitation cillum id
            incididunt elit sunt. Qui minim sit magna Lorem id et dolore velit Lorem amet exercitation duis
            deserunt. Anim id labore elit adipisicing ut in id occaecat pariatur ut ullamco ea tempor duis.
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">Est
            quis nulla laborum officia ad nisi ex nostrud culpa Lorem excepteur aliquip dolor aliqua irure ex.
            Nulla ut duis ipsum nisi elit fugiat commodo sunt reprehenderit laborum veniam eu veniam. Eiusmod minim
            exercitation fugiat irure ex labore incididunt do fugiat commodo aliquip sit id deserunt reprehenderit
            aliquip nostrud. Amet ex cupidatat excepteur aute veniam incididunt mollit cupidatat esse irure officia
            elit do ipsum ullamco Lorem. Ullamco ut ad minim do mollit labore ipsum laboris ipsum commodo sunt
            tempor enim incididunt. Commodo quis sunt dolore aliquip aute tempor irure magna enim minim
            reprehenderit. Ullamco consectetur culpa veniam sint cillum aliqua incididunt velit ullamco sunt
            ullamco quis quis commodo voluptate. Mollit nulla nostrud adipisicing aliqua cupidatat aliqua pariatur
            mollit voluptate voluptate consequat non.
          </div>
        </div>
      </aside>
    </div>


    <!-- Jumbotron -->
    <div class="h-75 d-inline-block z-depth-3">
      <div class="text-white text-center py-5 px-4">
        <div class="py-5">

          <!-- Content -->
          <h5 class="h5 cyan-text"><i class="fas fa-chalkboard-teacher"></i> A Propos de moi !</h5>
          <h2 class="card-title h2 my-4 py-2">"Je saurai être un atout pour vous"</h2>

          <div class="list-group-flush flex-center">
            <div class="list-group-item" style="background-color:rgba(0, 0, 0, 0.01);">
              <p class="mb-0"><i class="fas fa-at fa-2x mr-4 blue p-3 white-text rounded " aria-hidden="true"></i>thomas.lemercier7156@hotmail.com</p>
            </div>
            <div class="list-group-item" style="background-color:rgba(0, 0, 0, 0.01);">
              <p class="mb-0"> <i class="fas fa-phone fa-2x mr-4 mr-4 red p-3 white-text rounded" aria-hidden="true"></i>+33 7 89 71 49 59</p>
            </div>
          </div>

          <div class="list-group-flush flex-center">
            <div class="list-group-item" style="background-color:rgba(0, 0, 0, 0.01);">
              <p class="mb-0"><i class="fas fa-home fa-2x mr-4 mr-4 purple p-3 white-text rounded" aria-hidden="true"></i>38 Avenue de la résistance, 93340, Le Raincy</p>
            </div>
            <div class="list-group-item" style="background-color:rgba(0, 0, 0, 0.01);">
            <p class="mb-0"><i class="fas fa-birthday-cake fa-2x mr-4 mr-4 green p-3 white-text rounded" aria-hidden="true"></i>07/01/1999</p>
          </div>
        </div>

        <a href="img/CV.pdf" download="img/CV.pdf" class="btn blue-gradient mt-5"><i class="fas fa-clone left"></i> Télécharger mon CV</a>

      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</div>
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
