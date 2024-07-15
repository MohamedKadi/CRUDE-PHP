<?php
//connection
function database_connection(){
    $pdo = new PDO('mysql:dbname=db_stagaire;host=localhost;port=4306','root','');
    return $pdo;
}
//list of stagiaire from database
function liste_stagiaire(){
    $pdo=database_connection();
    $stagaires =$pdo->query('Select * from stagaire')->fetchAll(PDO::FETCH_OBJ);
    return $stagaires;
}