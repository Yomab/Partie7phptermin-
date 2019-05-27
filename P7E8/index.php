<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>exercice8Partie7</title>
    </head>
    <body>
        <?php
        if (isset($_POST['genre']) && isset($_POST['prenom']) && isset($_POST['nom']) && isset($_FILES['monfichier'])) {
            $pathinfo = pathinfo($_FILES['monfichier']['name'])
            ?>
            <p><?= $pathinfo['extension'] .' '. $_POST['genre'] . ' ' . $_POST['prenom'] . ' ' . $_POST['nom']; ?></p>

            <?php
        } else {
            ?>



            <form action="" method="post" enctype="multipart/form-data">
                <p>
                    <SELECT name="genre" size="1">
                        <OPTION>Monsieur
                        <OPTION>Madame
                    </SELECT>
                    <input type="text" name="prenom" />
                    <input type="text" name="nom" />
                    <input type="file" name="monfichier" />
                    <input type="submit" value="Valider" />
                </p>
            </form>

            <?php
        }
        ?>  

    </body>   
</html>