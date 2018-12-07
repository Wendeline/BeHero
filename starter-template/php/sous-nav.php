<?php
    if(isset($_SESSION['user'])){
        echo'<li><a href="deconnexion.php">Déconnexion</a></li>';
    }else{
        echo'<li><a href="connexion.php">Mon Compte</a></li>';
        echo'<li><a href="selectEleve.php">Modifier les données</a></li>';
        echo'<li><a href="FormInsert.php">Pas encore inscrit ?</a></li>';
    }

?>


