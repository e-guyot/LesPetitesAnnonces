<?php

require_once __DIR__ . '/../config/config.php';

function connect() {
    //connexion à la bdd

    $dsn = 'mysql:dbname=' . DATABASE_CONFIG['database'] . ';host=' . DATABASE_CONFIG['host'];
    $user = DATABASE_CONFIG['user'];
    $password = DATABASE_CONFIG['password'];

    try {
        $dbh = new PDO($dsn, $user, $password);
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }

    return $dbh;
}