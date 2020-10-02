<?php
require_once (__DIR__ . '/../Model/AnnoncesModel.php');

if (PHP_SESSION_NONE === session_status()) {
    header('Location: login');
} 


$tabUneAnnonce = getAnnonce($_GET['id']);

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    if (updateAnnonce($_POST)){
        echo '<div class="alert alert-success" role="alert">Modification enregistrer</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Echec de la modification</div>';
    }
}



require_once (__DIR__ . '/../View/modifAnnonceView.php');