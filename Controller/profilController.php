<?php
require_once (__DIR__ . '/../Model/UserModel.php');

if (PHP_SESSION_NONE === session_status()) {
	header('Location: /login');
} 

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    if (isset($_POST['verif_password']) && insertUser($_POST)){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $_SESSION['user'] = ['id' => getUserId($username)['id'], 'name' => $username, 'email' => $email];
        $_SESSION['connected'] = true;
    } else {
        startSession();
    }
}
       
require_once (__DIR__ . '/../View/profilView.php');

function startSession(){
    if ('POST' === $_SERVER['REQUEST_METHOD']) {
        $users = getAllUser();
        foreach ($users as $key => $user) {
            $username = sanitize($_POST['pseudo']);
            $password = sanitize($_POST['password']);
            if ($user['name'] === $username && password_verify($password, $user['password'])) {
                return $_SESSION['user'] = ['id' => getUserId($username)['id'], 'name' => $username, 'email' => $user['email']];       
            }
        }
    }
}

function sanitize(string $input): string {
    $input = trim($input);
    return htmlspecialchars($input);
}