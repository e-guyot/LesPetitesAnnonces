<?php

require_once __DIR__ . '/connexionModel.php';



function getAllAnnonces(){
    $db = connect();
    $query = $db->prepare('SELECT * FROM annonces');
    $query->execute();
    return $query->fetchAll();
}

function getAllMesAnnonces(){
    $db = connect();
    $query = "SELECT * FROM annonces WHERE id_user = :id_user";
    $statement = $db->prepare($query);
    $statement->execute(array('id_user' => $_SESSION['user']['id']));
    $results = $statement->fetch(PDO::FETCH_ASSOC);
    $statement->closeCursor();

    return $results;
}

function getAnnonce($id){
    $db = connect();
    $delimiter = "'";
    $query = $db->prepare('SELECT * FROM annonces where id = '.$delimiter.$id.$delimiter.';');
    $query->execute();
    return $query->fetch();
}

function insertAnnonce($tab){
    $db = connect();
    $query = "INSERT INTO annonces(titre, contenu, prix, id_user, date_fin) VALUES (:titre, :contenu, :prix, :id_user, ".time()." ";
    $statement = $db->prepare($query);
    $statement->execute(array('id_user' => $_SESSION['user']['id'], 'contenu' => $tab['desc'], 'titre' => $tab['titre'], 'prix' => $tab['prix']));
    $statement->closeCursor();

    return $statement;

}