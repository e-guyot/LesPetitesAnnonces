<?php
require_once (__DIR__ . '/../Model/UserModel.php');

if (PHP_SESSION_NONE === session_status()) {
	header('Location: /login');
} 

if ('POST' === $_SERVER['REQUEST_METHOD']) {
    if (isset($_POST['verif_password'])){ // si variable exist alors enregistrement
        $patternMdp = '^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$';
        $patternTel = '/^(\+33|0033|0)(6|7)[0-9]{8}$/g';
        $tel = str_replace($_POST['tel'], '/[\.,\s]/g', '');
        if ($arguments['password'] === $arguments['verif_password'] && preg_match($patternMdp, $arguments['password']) && preg_match($patternTel, $tel) && filter_var($arguments['email'], FILTER_VALIDATE_EMAIL)){
            insertUser($arguments);
            $username = $_POST['name'];
            $email = $_POST['email'];
            $_SESSION['user'] = ['id' => getUserId($username)['id'], 'name' => $username, 'email' => $email];
        } else {
            echo '<div class="alert alert-danger" role="alert">L\'enregistrement est incorrect</div>';
        }
    } else {
        startSession();
    }
header ('Location: /profil');
}
       

function startSession(){
    if ('POST' === $_SERVER['REQUEST_METHOD']) {
        $users = getAllUser();
        foreach ($users as $key => $user) {
            $username = sanitize($_POST['pseudo']);
            $password = sanitize($_POST['password']);
            if ($user['name'] === $username && password_verify($password, $user['password'])) {
                return $_SESSION['user'] = ['id' => $user['id'], 'name' => $username, 'email' => $user['email'], 'tel' => $user['tel']];     
            }
        }
    }
}

function sanitize(string $input): string {
    $input = trim($input);
    return htmlspecialchars($input);
}