<?php include 'starter-template/php/coDatabase.php';

//UPDATE UN ELEVE 
$id = $_GET['id'];
$nom = $_POST['nom'];
$pre = $_POST['prenom'];
$point = $_POST['point'];
$pwd = $_POST['password'];
$classe = $_POST['classe'];

try {
    $req = ("UPDATE eleve SET NomE=?, PrenomE=?, nbPoint=?, password=?, idC=? WHERE idE=?");
    $traitement = $connect->prepare($req);    
    $traitement -> bindParam(1,$nom);
    $traitement -> bindParam(2,$pre);
    $traitement -> bindParam(3,$point);
    $traitement -> bindParam(4,$pwd);
    $traitement -> bindParam(5,$classe);
    $traitement -> bindParam(6,$id);
    $traitement -> execute();
    if ($traitement == true){
        header('location:starter-template/index.php');
    }

}catch(PDOException $e){
    die('Source  :'.$dsn.'Erreur :'.$e);
}