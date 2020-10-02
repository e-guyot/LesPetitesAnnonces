<?php

//connection db à retirer si on l'a déjà dans le fichier qui appelle
require_once('Model/connexionModel.php');
require_once('Model/UserModel.php');

$db = connect();

//select les infos du destinataires à partir de l'id fournit par le formulaire
if (isset($_POST['annonceTitre']) && isset($_POST['content']) && isset($_POST['userId'])) {

//destinataire
    $to = getUserById($_POST['userId']);

//expéditeur
    $from = getUserById($_SESSION['userId']);

    mail($to['email'], 'à propos de votre annonce ' . $_POST['annonceTitre'], $_POST['content'], "Reply-To: " . $from['email']);
}