<?php
include 'php/coDatabase.php';
session_start();
    try {
         $nom = $_POST['nom'];
         $prenom = $_POST['prenom'];
         $mdp = $_POST['password'];
        //la requete compte le nb de ligne correspondant au couple login/mdp
        $req = "select * from eleve where NomE=? and PrenomE=? and password=?";

        $traitement = $connect->prepare($req);

        $traitement->bindparam(1, $nom);
        $traitement->bindparam(2, $prenom);
        $traitement->bindparam(3, $mdp);

        $traitement->execute();
        
        if ($ligne=$traitement->fetch()) {
            if ($ligne['idC']==4){
                $_SESSION['user'] = "prof";
                header('location:EnregistreNote.php');
            }else{
                $_SESSION['user'] = "eleve";
                header('location:profil.php?id='.$ligne['idE']); 
            }
        } else {        
            header('location:index.php');
        }
    }
    catch (PDOException $e){
        die("Source : ".$dsn." Erreur : ".$e->getMessage());
    }
    
    ?>