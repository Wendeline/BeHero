<?php
    include 'php/coDatabase.php';
    
    // c'est sur fait les injection sql
    $req = "SELECT * FROM eleve where idE =". $_GET['idE'] ;
    $traitement = $connect->prepare($req);
    $traitement->execute();
    
    $row = $traitement->fetch();
    
    var_dump($_POST);
    
    $pt = $row['nbPoint'] + $_POST['nbpt'];
    
    var_dump($pt);
    
    $req = "UPDATE eleve SET  `nbPoint` = ". $pt ." WHERE idE=". $_GET['idE'];
    $traitement = $connect->prepare($req);
    $traitement->execute();
    
    header("Location:EnregistreNote.php?retour=OK");