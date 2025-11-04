<?php include("entete.php"); ?>
<section>
    <h2>connexion</h2>
            <form action="connexion.php" method="post">
                <label for="identifiant">Identifiant :</label>
                <input type="text" id="identifiant" name="identifiant" >
                <br>
                <label for="mdp">Mot de passe :</label>
                <input type="password" id="mdp" name="motdepasse" >
                <br>
                <input type="submit" value="Envoyer">
            </form>

</section>

<?php include("pieddepage.php"); ?>

