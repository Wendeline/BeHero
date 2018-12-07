<!DOCTYPE html>
<html lang="fr">

        <?php include'php/head.php'; ?>


<body>

    <?php include 'php/nav.php'; ?>

    <form action="ValidCo.php" method="post" >
    			<h1 class="noMarge">Se connecter</h1>
			    <div class="row">
                                <label for="prenom">Prenom :</label>
			        <input id="prenom" type="text" class="validate" name="prenom">
			    </div>
                        <div class="row">
                            <label for="nom">Nom :</label>
			    <input id="nom" type="text" class="validate" name="nom">
			</div>
			<div class="row">
                            <label for="password">Mot de passe :</label>
			    <input id="password" type="password" class="validate" name="password">
			</div>
			    <button type="summit" class="btn right">Valider</button>
                            
    <?php
        include 'php/footer.php';
    ?>

    <script type="text/javascript">
    </script>            
</body>
</html>
