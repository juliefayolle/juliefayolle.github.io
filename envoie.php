<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Envoie email</title>
    <meta http-equiv="refresh" content="3; URL=https://www.juliefayolle.fr/#contact">
  </head>
  <body>

  </body>
</html>

<?php
$nom=$_POST['nom'];
$mail=$_POST['email'];
$objet=$_POST['objet'];
$message=$_POST['message'];


/////voici la version Mine
$headers = "MIME-Version: 1.0\r\n";

//////ici on détermine le mail en format text
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";

////ici on détermine l'expediteur et l'adresse de réponse
$headers .= "From: $nom <$mail>\r\nReply-to : $nom <$mail>\nX-Mailer:PHP";

$subject="$objet";
$destinataire="fayolle.julie96@gmail.com"; //remplacez "webmaster@votre-site.com" par votre adresse e-mail
$body="$message";
if (mail($destinataire,$subject,$body,$headers)) {
echo "Votre mail a été envoyé<br>";
} else {
echo "Une erreur s'est produite";
}
?></p>
<p align="center">Vous allez bientot etre redirigé vers la page d'acceuil<br>
Si vous n'etes pas redirigé au bout de 5 secondes cliquez <a href="https://www.juliefayolle.fr/">ici
</a></p>
