<!DOCTYPE html>
<html>
    <?php include'php/head.php'; ?>
    
    <body>
         <?php include 'php/nav.php'; 
         
        try {
            $req = "SELECT * FROM eleve WHERE idE=?";
            $traitement=$connect->prepare($req);
            $traitement->bindParam(1,$_GET['id']);
            //execute la req
            $traitement->execute();
            $ligne = $traitement->fetch();
            //var_dump($donnees);
            }
            catch (PDOException $e){
                die($dsn."erreur : ".$e->getMessage());
            } 
            ?> 
        <form action ="updateEleve.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $ligne['idE']?>"/>
            <fieldset>                
                <label for='nom'>Votre Nom :</label>
                <input type="text" name="nom" value="<?php echo $ligne['NomE']?>" required/><br><br>
                <label for='prenom'>Votre Prénom : </label>                
                <input type="text" name="prenom" value="<?php echo $ligne['PrenomE']?>" required/><br><br>
                <label for='point'>Nombre de point : </label>                
                <input type="text" name="point" value="<?php echo $ligne['nbPoint']?>" required/><br><br>
                <label for='password'>Mot de passe : </label>                
                <input type="password" name="password" value="<?php echo $ligne['password']?>" required/><br><br>
                <label for='classe'>Classe : </label>                
                <input type="text" name="classe" value="<?php echo $ligne['idC']?>" required/><br><br>
                
                <input type="submit" value="Valider"/> 
            </fieldset>
        </form>
         <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>
    </body>
</html>
