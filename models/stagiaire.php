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
$count = -1;
function create(){
    global $count;
    $count++;
    $nom = $_POST['nom'];
    $pdo=database_connection();
    $sqlState = $pdo->prepare('INSERT INTO stagaire VALUES(?,?,?,?,?,?)');
    return $sqlState->execute([$count,$nom,$_POST['prenom'],$_POST['age'],$_POST['login'],$_POST['pw']]);

}