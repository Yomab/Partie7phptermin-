<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice5Partie7</title>
    </head>
    <body>
        
<form action="test.php" method="POST">
<p>
    <SELECT name="genre" size="1">
<OPTION>Monsieur
<OPTION>Madame
    </SELECT>
     <input type="text" name="prenom" />
    <input type="text" name="nom" />
      <input type="submit" value="Valider" />
</p>
</form>
        <?php
        if (isset($_POST['genre']) &&isset($_POST['prenom']) && isset($_POST['nom'])) {
            ?>
            <p><?= $_POST['genre'] . ' ' .$_POST['prenom'] . ' ' . $_POST['nom']; ?></p>
            <?php
        } else {
            ?>
            <p>this not existing.</p>
            <?php
        }
        ?>
    </body>   
</html>