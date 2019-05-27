<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice1Partie7</title>
    </head>
    <body>
        
<form action="test.php" method="GET">
<p>
    <input type="text" name="prenom" />
    <input type="text" name="nom" />
      <input type="submit" value="Valider" />
</p>
</form>
        <?php
        if (isset($_GET['prenom']) && isset($_GET['nom'])) {
            ?>
            <p><?= $_GET['prenom'] . ' ' . $_GET['nom']; ?></p>
            <?php
        } else {
            ?>
            <p>this not existing.</p>
            <?php
        }
        ?>
    </body>   
</html>