<?php include 'php/coDatabase.php';
      include'php/head.php';
      include 'php/nav.php'; 
      include 'php/footer.php';
      //include 'php/script.php';
//SELECT UN ELEVE 
//$id = $_GET['id'];
try {
    $req = ("SELECT * FROM eleve");
    $traitement = $connect->prepare($req);
    $traitement -> execute();

        while($ligne = $traitement ->fetch()){
        echo $ligne['NomE'].'<br>';
        echo $ligne['PrenomE'].'<br>';
        echo $ligne['nbPoint'].'<br>';
        echo $ligne['password'].'<br>';
        echo $ligne['idC'].'<br><br>';
        echo"<a href=\"FormUpdate.php?id=".$ligne['idE']."\">Modifier</a><br>";
        echo"<a href=\"deleteEleve.php?id=".$ligne['idE']."\">Supprimer</a><br><br>";
    }

}catch(PDOException $e){
    die('Source  :'.$dsn.'Erreur :'.$e);
}