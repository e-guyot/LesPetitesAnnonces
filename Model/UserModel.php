<?php

require_once __DIR__ . '/connexionModel.php';

function getAllUser(){
    $db = connect();
    $query = $db->prepare('SELECT * FROM user');
    $query->execute();
    return $query->fetchAll();
}

function insertUser($arguments){
    $db = connect();
    $delimiter = "'";
    $patternMdp = '^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_])([-+!*$@%_\w]{8,15})$';
    $patternTel = '/^(\+33|0033|0)(6|7)[0-9]{8}$/g';
    $tel = str_replace($_POST['tel'], '/[\.,\s]/g', '');
//    if ($arguments['password'] === $arguments['verif_password'] && preg_match($patternMdp, $arguments['password']) && preg_match($patternTel, $tel) && filter_var($arguments['email'], FILTER_VALIDATE_EMAIL)){
        $sql = 'INSERT INTO users (name, password, email, tel, inscription_date) VALUES ('.$delimiter.$arguments['name'].$delimiter.', '.$delimiter.password_hash($arguments['password'], PASSWORD_DEFAULT).$delimiter.', '.$delimiter.$arguments['email'].$delimiter.', '.$delimiter.$arguments['tel'].$delimiter.', '.$delimiter.time().$delimiter.');';
        $query = $db->prepare($sql);
        $_SESSION['login'] = $arguments['name'];
        return $query->execute();
//    }
//    return FALSE;
}

function getUserId($name){
    $db = connect();
    $delimiter = "'";
    $query = $db->prepare('SELECT id FROM user WHERE name = '.$delimiter.$name.$delimiter.';');
    $query->execute();
    return $query->fetch();
}

function getUserById($idUser) {
    $db = connect();
    $query = "SELECT * FROM users WHERE id = :userId";
    $statement = $db->prepare($query);
    $statement->execute(array('userId' => $idUser));
    $results = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $results;
}