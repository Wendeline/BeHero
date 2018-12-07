<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <?php $req = "select * from classe";
        $traitement = $connect->prepare($req);
        $traitement->execute();
        ?>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <FORM NAME="choixClasse">
                    <SELECT NAME="choixClasse" onChange="AfficheEleve(this.value)" class="browser-default">
                        <?php
                            while ($row = $traitement->fetch()){
                                echo "<option VALUE=".$row['idC'].">".$row['NominationC']."</option>";
                            } 
                        ?>
                        
                    </SELECT>
                </FORM>
            </div>
        </div>
    </div>
    
    <div id="Liste" class="container"></div>
                     

    <?php
        include 'php/footer.php';
    ?>
    
    
    <script>
        M.AutoInit();
        <?php
            if(isset($_GET['retour'])) {
                echo "M.toast({html: '". $_GET['retour'] ."'})";
            }
        ?>
    </script>

                
</body>
</html>
