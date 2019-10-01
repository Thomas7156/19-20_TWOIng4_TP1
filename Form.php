<?php

//Variables provenant du formulaire
$Nom = $_POST["Nom"];
$Mail = $_POST["Mail"];
$Objet = $_POST["Objet"];
$Message = $_POST["Message"];

//Envoie de mail qui fonctionne si on peut se connecter au serveur mail
echo "<script language = \"javascript\"> alert('Votre message m'a bien été transmit, merci pour l'intérêt que vous me portez !) </script>";
ini_set("SMTP", "smtp.orange.fr");
ini_set("smpt_port", "25");
mail("thomas.lemercier7156@hotmail.com", $Objet = $_POST["Objet"], $Message = $_POST["Message"], $Mail = $_POST["Mail"]);
header('Location: index.php');
?>
