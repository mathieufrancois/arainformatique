<?php

$prenom = $_POST["name"];
$nom = $_POST["surname"];
$mail = $_POST["mail"];
$naissance = $_POST["birth"];
$tel = $_POST["num"];
$street = $_POST["street"];
$cp = $_POST["postal"];
$ville = $_POST["ville"];

$email_from = 'contact@mathieufrancois.dev';
$headers = "From: $email_from \r\n";
$email_subject = "Demande d'informations";

$message = "Nous avons bien reçu votre demande avec les informations suivantes : \n $prenom\n $nom\n $mail\n $naissance\n $tel\n $street\n $cp\n $ville";

mail($mail,$email_subject,$message,$headers);

?>