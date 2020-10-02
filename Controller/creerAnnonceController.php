<?php
require_once (__DIR__ . '/../Model/AnnoncesModel.php');

if (PHP_SESSION_NONE === session_status()) {
    header('Location: /login');
} 


if ('POST' === $_SERVER['REQUEST_METHOD']) {
    var_dump($_POST);
    if (insertAnnonce($_POST)){
        header ('Location: /annonces');
        echo '<div class="alert alert-success" role="alert">Enregistrement effectuer</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Echec de l\'enregistrement</div>';
    }
}
require_once (__DIR__ . '/../View/creerAnnonceView.php');