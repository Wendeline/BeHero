<?php

include '../coDatabase.php';

    if (isset($_GET['id'])) {
        $req = "select * from eleve where idC=?";
        $traitement = $connect->prepare($req);
        $traitement->bindparam(1, $_GET['id']);
        $traitement->execute();
        
        while ($row = $traitement->fetch()){
      ?>
            <form action="SavePt.php?idE=<?php echo $row['idE'];?>" method="post" >
        
                <div class="row">
                    <label for="prenom">Prenom :</label>
                    <input id="prenom" type="text" class="validate" value="<?php echo $row['PrenomE']; ?>" name="prenom">
                </div>

                <div class="row">
                    <label for="nom">Nom :</label>
                    <input id="nom" type="text" class="validate" value="<?php echo $row['NomE']; ?>" name="nom">
                </div>

                <div class="row">
                    <label for="Note">Note (/20) :</label>
                    <input id="Note" type="text" class="validate" onblur="RetranscrisNote(this.value)" name="Note">
                    <input id="nbpt" class="validate" name="nbpt">
                </div>
                
                <button type="summit" class="btn right">Valider</button>
            </form>
          <?php
        }
    }
    
    
?>