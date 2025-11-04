<?php include("entete.php"); ?>

<section>
    <?php
         if (!empty($_REQUEST ['identifiant'])) {
             $identifiant = $_REQUEST['identifiant'];
             echo "<h2>Bienvenue " $identifiant  "!</h2";
         } else {
             echo "<p>Veuillez vous connecter.<p>";
            }
            ?>
            </section>
<?php include("pieddepage.php"); ?>