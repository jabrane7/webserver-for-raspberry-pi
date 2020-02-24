<?php

$msg_erreur = "Erreur. Les champs suivants doivent être obligatoirement remplis :<br/><br/>";

$msg_ok = "Votre demande a bien été prise en compte.";

$message = $msg_erreur;

//define('MAIL_DESTINATAIRE','echamik@ardeche.fr');

//define('MAIL_SUJET','Reponse au concour du sept');

// vérification des champs

if (empty($_POST['nom'])) 

$message .= "Votre nom<br/>";

if (empty($_POST['prenom'])) 

$message .= "Votre prenom<br/>";

if (empty($_POST['telephone'])) 

$message .= "Votre telephone<br/>";

if (empty($_POST['mail'])) 

$message .= "Votre mail<br/>";

if (empty($_POST['adresse'])) 

$message .= "Votre adresse<br/>";

if (empty($_POST['utilisateur'])) 

$message .= "utilisateur<br/>";

if (empty($_POST['password'])) 

$message .= "password<br/>";

if (empty($_POST['lampe1on']))

$message .= "lampe1on<br/>";

if (empty($_POST['lampe1off']))

$message .= "lampe1off<br/>";
 
if (empty($_POST['lampe2on']))

$message .= "lampe2on<br/>";

if (empty($_POST['lampe2off']))

$message .= "lampe2off<br/>";
if (empty($_POST['lampe3on']))

$message .= "lampe3on<br/>";

if (empty($_POST['lampe3off']))

$message .= "lampe3off<br/>";

if (empty($_POST['microon']))

$message .= "microon<br/>";

if (empty($_POST['microoff']))

$message .= "microoff<br/>";

if (empty($_POST['climon']))

$message .= "climon<br/>";

if (empty($_POST['climoff']))

$message .= "climoff<br/>";

if (empty($_POST['tvon']))

$message .= "tvon<br/>";

if (empty($_POST['tvoff']))

$message .= "tvoff<br/>";

if (empty($_POST['arroon']))

$message .= "arroon<br/>";

if (empty($_POST['arrooff']))

$message .= "arrooff<br/>";

if (empty($_POST['temp1']))

$message .= "temp1<br/>";

if (empty($_POST['temp2']))

$message .= "temp2<br/>";




 // si un champ est vide, on affiche le message d'erreur et on stoppe le script

if (strlen($message) > strlen($msg_erreur)) {

   echo $message; die();

}

// sinon c'est ok => on continue

foreach($_POST as $index => $valeur) {

  $index = stripslashes(trim($valeur));

}

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur









 $list = array (

   array($_POST['nom'], $_POST['prenom'], $_POST['telephone'], $_POST['mail'], $_POST['adresse'],
              $_POST['ville'], $_POST['utilisateur'], $_POST['password'], $_POST['lampe1on'],
              $_POST['lampe1off'], $_POST['lampe2on'], $_POST['lampe2off'], $_POST['lampe3on'], $_POST['lampe3off'],
              $_POST['microon'], $_POST['microoff'], $_POST['climon'], $_POST['climoff'], $_POST['tvon'],
              $_POST['tvoff'], $_POST['arroon'], $_POST['arrooff'], $_POST['temp1'], $_POST['temp2'])

   
  // array($_POST['adresse'], $_POST['ville'], $_POST['codepostal'])

  // array($_POST['publier'], $_POST['regle']),

);

$fp = fopen('nomf.csv', 'w');

 foreach ($list as $fields) {

    fputcsv($fp, $fields);

}

fclose($fp);


?>
