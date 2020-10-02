<?php
require_once (__DIR__ . '/../Model/AnnoncesModel.php');

if (PHP_SESSION_NONE === session_status()) {
	header('Location: slogin');
} 

$tabAnnonces = getAllMesAnnonces();

require_once (__DIR__ . '/../View/annoncesView.php');