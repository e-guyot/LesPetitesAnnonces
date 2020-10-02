<?php
require_once (__DIR__ . '/../Model/AnnoncesModel.php');

if (PHP_SESSION_NONE === session_status()) {
	header('Location: /login');
} 

$id = $_GET['id'];
$tabAnnonce = getAnnonce($id);

require_once (__DIR__ . '/../View/annonceView.php');