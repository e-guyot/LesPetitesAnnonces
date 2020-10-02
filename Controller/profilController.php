<?php
require_once (__DIR__ . '/../Model/UserModel.php');

if (PHP_SESSION_NONE === session_status()) {
    header('Location: /login');
} 


if ('POST' === $_SERVER['REQUEST_METHOD']) {
    if ($_POST['mdpActuel'] !== ''){
        $user = getUserById($_SESSION['user']['id']);
        var_dump($_POST);
        if (password_verify($_POST['mdpActuel'],$user['password']) && $_POST['MdpNew'] === $_POST['MdpNew2'] && updateMdp($_POST)){
            echo '<div class="alert alert-success" role="alert">Enregistrement du mot de passe effectuer</div>';
        } else {
            echo '<div class="alert alert-danger" role="alert">Echec de l\'enregistrement du mot de passe</div>';
        }
    }
    if (updateUser($_POST)){ 
        $_SESSION['user'] = ['id' => $_SESSION['user']['id'], 'name' => $_POST['name'], 'email' => $_POST['email'], 'tel' => $_POST['tel']];
        echo '<div class="alert alert-success" role="alert">Enregistrement effectuer</div>';
    } else {
        echo '<div class="alert alert-danger" role="alert">Echec de l\'enregistrement</div>';
    }
}



require_once (__DIR__ . '/../View/profilView.php');