<?php
require_once 'models\stagiaire.php';

function listeStagiairesAction(){
    $stagiaires = liste_stagiaire();
    require_once 'views\liste_stagiaires.php';
    return $stagiaires;
}


function createAction(){
    require_once 'views\create.php';
}
function storedataAction(){
    $isCreated = create();
    header('location:index.php');
    return $isCreated;
}

function destroyAction(){

}

function editAction(){

}