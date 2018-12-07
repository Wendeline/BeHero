<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Ajouter un élève</title>
         <?php include'php/head.php'; ?>
    </head>
    <body>
         <?php include 'php/nav.php'; ?>
        <form action ="insertEleve.php" method="POST" >
            <fieldset>                
                <label>Votre Nom :</label>
                <input type="text" name="nom" required/><br><br>
                <label>Votre Prénom : </label>                
                <input type="text" name="prenom" required/><br><br>
                <label>Nombre de point : </label>                
                <input type="text" name="point" required/><br><br>
                <label>Mot de passe : </label>                
                <input type="password" name="password" required/><br><br>
                <label>Classe : </label>                
                <input type="text" name="classe" required/><br><br>
                <input type="submit" value="Ajouter"/> 
            </fieldset>
        </form>
         <?php
        include 'php/footer.php';
        include 'php/script.php';
    ?>
    </body>
</html>
