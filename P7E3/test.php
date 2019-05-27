<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <title>exercice3Partie7</title>
    </head>
    <body>
        <p>Bonjour !</p>

<p>Je sais comment tu t'appelles, hé hé. Tu t'appelles <?php echo $_POST['prenom'] . $_POST['nom']; ?>!</p>

<p>Si tu veux changer de prénom, <a href="index.php">clique ici</a> pour revenir à la page formulaire.php.</p>
    </body>
</html>