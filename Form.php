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

<?php

//Variables provenant du formulaire
$Nom = $_POST["Nom"];
$Mail = $_POST["Mail"];
$Objet = $_POST["Objet"];
$Message = $_POST["Message"];

//Envoie de mail qui fonctionne si on peut se connecter au serveur mail
ini_set("SMTP", "smtp.orange.fr");
ini_set("smpt_port", "25");
mail("thomas.lemercier7156@hotmail.com", $Objet = $_POST["Objet"], $Message = $_POST["Message"], $Mail = $_POST["Mail"]);
// header("Location: index.php");

?>

<!-- <body>

  <main>

    <div class="modal fade" id="ModalWarning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-notify modal-warning" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <p class="heading">C'est dans la boite !</p>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true" class="white-text">&times;</span>
            </button>
          </div>

          <div class="modal-body">

            <div class="row">
              <div class="col-3 text-center">
                <img src="img/Thomas.png" class="rounded-circle">
                <div style="height: 10px"></div>
                <p class="title mb-0">Thomas</p>
                <p class="text-muted " style="font-size: 13px"></p>
              </div>

              <div class="col-9">
                <p>Votre message m'a bien été transmis, et je tâcherai de vous répondre dans les plus bref délais.</p>
                <p class="card-text"><strong>Merci infiniement pour l'intérêt que vous me portez !</strong></p>
              </div>
            </div>


          </div>

          <div class="modal-footer justify-content-center">
            <a type="button" class="btn btn-warning">Get it now <i class="far fa-gem ml-1 white-text"></i></a>
            <a type="button" class="btn btn-outline-warning waves-effect" data-dismiss="modal">No, thanks</a>
          </div>
        </div>
      </div>
    </div>

  </main>

</body> -->


</html>
