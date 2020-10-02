<?php

require_once __DIR__ . '/connexionModel.php';

function getAllUser(){
    $db = connect();
    $query = $db->prepare('SELECT * FROM users');
    $query->execute();
    return $query->fetchAll();
}

function insertUser($arguments){
    $db = connect();
        $sql = 'INSERT INTO users (name, password, email, tel, inscription_date) VALUES ('.$delimiter.$arguments['name'].$delimiter.', '.$delimiter.password_hash($arguments['password'], PASSWORD_DEFAULT).$delimiter.', '.$delimiter.$arguments['email'].$delimiter.', '.$delimiter.$arguments['tel'].$delimiter.', '.$delimiter.time().$delimiter.');';
        $query = $db->prepare($sql);
        return $query->execute();
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

function updateUser($user){
    $db = connect();
    $query = "UPDATE users SET name = :name, tel = :tel, email = :email WHERE id = :userId ";
    $statement = $db->prepare($query);
    $statement->execute(array('userId' => $_SESSION['user']['id'], 'name' => $user['name'], 'email' => $user['email'], 'tel' => $user['tel']));
    $statement->closeCursor();

    return $statement;
}

function updateMdp($user){
    $db = connect();
    $query = "UPDATE users SET password = :newPass WHERE id = :userId ";
    $statement = $db->prepare($query);
    $statement->execute(array('userId' => $_SESSION['user']['id'], 'newPass' => password_hash($user['MdpNew'], PASSWORD_DEFAULT)));
    $statement->closeCursor();

    return $statement;
}