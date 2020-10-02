<?php

require_once __DIR__ . '/connexionModel.php';



function getAllAnnonces(){
    $db = connect();
    $query = $db->prepare('SELECT * FROM annonce');
    $query->execute();
    return $query->fetchAll();
}

function getAnnonce($id){
    $db = connect();
    $delimiter = "'";
    $query = $db->prepare('SELECT * FROM annonce where id = '.$delimiter.$id.$delimiter.';');
    $query->execute();
    return $query->fetch();
}