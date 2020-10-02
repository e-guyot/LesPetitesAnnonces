  
<?php

if (PHP_SESSION_NONE === session_status()) {
	require_once(__DIR__ . '/../View/loginView.php');
} else if (PHP_SESSION_ACTIVE === session_status()){
    session_destroy();
	require_once(__DIR__ . '/../View/loginView.php');
}