<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <?php   $id = $_GET['id'];
            $req = "SELECT * FROM eleve e, classe c where e.idC = c.idC and idE = ?";
            $traitement = $connect ->prepare($req);
            $traitement -> bindParam(1, $id);
            $traitement -> execute();
            
            while($row = $traitement->fetch()) {
                echo "<h1>" . $row['PrenomE'] . " ". $row['NomE'] ."</h1>";
                echo "<h4>" . $row['NominationC'] . "</h4>";
                echo "Nombre de points : " . $row['nbPoint'];
            }

    ?>
    <?php
        include 'php/footer.php';
    ?>

    <script type="text/javascript">
    </script>            
</body>
</html>
