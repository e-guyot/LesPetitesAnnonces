<?php
require_once (__DIR__ . '/../Model/UserModel.php');

session_destroy();
if (PHP_SESSION_NONE === session_status()) {
    require_once(__DIR__ . '/../View/registerView.php');
}


function sanitize(string $input): string {
    $input = trim($input);
    return htmlspecialchars($input);
}