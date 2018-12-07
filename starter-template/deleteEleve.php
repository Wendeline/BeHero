<?php include 'starter-template/php/coDatabase.php';
    
$no=$_GET['id'];
//Connexion à la BDD
    try {
        //Récup de tous les enregistrements 
            $req = ('DELETE FROM eleve WHERE eleve.idE=?');
            $req = $connect->prepare($req);
            $req->bindParam(1,$no);
            $req->execute();
            if($req == true){
                echo 'Elève bien supprimé.';
                }
            else{
                header('location:../index.php');
                }
            }catch(PDOException $e){
                die("Source : ".$dsn." Erreur : ".$e->getMessage());
             }
?>

