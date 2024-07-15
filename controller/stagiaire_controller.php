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
    var_dump($_POST);
}

function destroyAction(){

}

function editAction(){

}