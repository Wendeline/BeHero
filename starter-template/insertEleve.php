<?php include 'php/coDatabase.php';

//INSERT UN ELEVE 
$nom = $_POST['nom'];
$pre = $_POST['prenom'];
$point = $_POST['point'];
$pwd = $_POST['password'];
$classe = $_POST['classe'];

try {
    $req = ("INSERT INTO eleve (NomE, PrenomE, nbPoint, password, idC) VALUES (?, ?, ?, ?, ?)");
    $traitement = $connect->prepare($req);
    $traitement -> bindParam(1,$nom);
    $traitement -> bindParam(2,$pre);
    $traitement -> bindParam(3,$point);
    $traitement -> bindParam(4,$pwd);
    $traitement -> bindParam(5,$classe);
    $traitement -> execute();

        if ($ligne = $traitement->fetch()){
        echo $ligne['NomE'];
        echo $ligne['PrenomE'];
        echo $ligne['nbPoint'];
        echo $ligne['password'];
        echo $ligne['idC'];
        header('location : index.php');
    }

}catch(PDOException $e){
    die('Source  :'.$dsn.'Erreur :'.$e);
}
    

 

