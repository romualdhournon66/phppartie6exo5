<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 6 exercice 5</title>
    </head>
    <body>
        <div class="container" id="page-top">
            <div class="row">
                <div class="col-xl-12">
                    <h1 align="center">PHP Partie 6 exercice 5</h1>
                    <h3 align="center">Exercice 5</h3>
                    <p align="center">Faire une page index.php. Tester sur cette page que tous les paramètres 
                        de cette URL existent et les afficher: index.php?week=12</p>
                </div>
            </div>
            <p align="center"><a href="index.php?week=12">Tester ici !</a></p>
            <?php
            if (isset($_GET['week'])) { // On teste si le paramètre week est bien présent et si oui, on affiche l'echo ci-dessous
                echo '<p align="center">Nous sommes le week-end ' . $_GET['week'] . ' !</p>';
            } else { // s'il nous manque un paramètres
//, on affiche l'echo ci-dessous
                echo '<p align="center">Désolé, il manque un paramètre !</p>';
            }
            ?>
        </div>
    </body>
</html>


