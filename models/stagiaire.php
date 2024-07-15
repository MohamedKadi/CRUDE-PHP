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

function create(){
    $pdo = database_connection();

    $stmt = $pdo->query('SELECT MAX(id) as max_id FROM stagaire');
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $count = $result['max_id'] + 1;
    $nom = $_POST['nom'];

    $sqlState = $pdo->prepare('INSERT INTO stagaire VALUES(?,?,?,?,?,?)');
    return $sqlState->execute([$count,$nom,$_POST['prenom'],$_POST['age'],$_POST['login'],$_POST['pw']]);

}