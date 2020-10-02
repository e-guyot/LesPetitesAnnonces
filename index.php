<?php

session_start();

$route = '/';

$requestedPage = '/';
if (isset($_SERVER['REQUEST_URI'])) {
	$requestedPage = preg_match("/\/([a-zA-Z0-9_-]*[\/]?)$/", $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'], $match);
}

switch ($match[0]) {
	case '/':
		require_once(__DIR__ . '/View/navBarView.php');
	break;
	case '/login':
		require_once(__DIR__ . '/View/navBarView.php');
		require_once(__DIR__ . '/Controller/loginController.php');
	break;
	case '/verifProfil':
		require_once(__DIR__ . '/Controller/verifController.php');
	break;
	case '/profil':
		require_once(__DIR__ . '/View/navBarView.php');
		require_once(__DIR__ . '/Controller/profilController.php');
	break;
	case '/register':
		require_once(__DIR__ . '/View/navBarView.php');
		require_once(__DIR__ . '/Controller/registerController.php');
	break;
	case '/annonces':
		require_once(__DIR__ . '/View/navBarView.php');
		require_once(__DIR__ . '/Controller/annoncesController.php');
	break;
	case '/annonce?id=2':
		require_once(__DIR__ . '/View/navBarView.php');
		require_once(__DIR__ . '/Controller/annonceController.php');
	break;
	case '/modifAnnonce?id=1':
		require_once(__DIR__ . '/View/navBarView.php');
		require_once(__DIR__ . '/Controller/modifAnnonceController.php');
	break;
	case '/creerAnnonce':
		require_once(__DIR__ . '/View/navBarView.php');
		require_once(__DIR__ . '/Controller/creerAnnonceController.php');
	break;
	case '/mesAnnonces':
		require_once(__DIR__ . '/View/navBarView.php');
		require_once(__DIR__ . '/Controller/mesAnnoncesController.php');
	break;
	case '/deco':
		session_destroy();
		require_once(__DIR__ . '/View/navBarView.php');
	break;
	case '/deco':
		session_destroy();
	break;
	default:
	require_once(__DIR__ . '/View/navBarView.php');
	require_once(__DIR__ . '/View/404View.php');
}

require_once(__DIR__ . '/View/footerView.php');