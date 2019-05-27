<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>exercice5Partie7</title>
    </head>
    <body>
        <p>Bonjour !</p>

<p>Je sais qui tu es ! <?php echo $_POST['genre'] .$_POST['prenom'] . $_POST['nom']; ?>!</p>

<p>Si tu veux changer tes informations, <a href="index.php">clique ici</a> pour revenir à la page formulaire.php.</p>
    </body>
</html>