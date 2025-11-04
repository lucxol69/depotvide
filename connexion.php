<?php include("entete.php"); ?>

<section>
    <?php
    if (!empty($_POST['identifiant']) && !empty($_POST['motdepasse'])) {
        $identifiant = $_POST['identifiant'];
        $motdepasse = $_POST['motdepasse'];
        
        
        echo "<h2>Bienvenue " . $identifiant . " !</h2>";
    } else {
        echo "<p>Veuillez remplir tous les champs du formulaire.</p>";
        echo "<p><a href='index.php'>Retourner au formulaire de connexion</a></p>";
    }
    ?>
</section>

<?php include("pieddepage.php"); ?>