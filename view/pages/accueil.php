<?php

// ----------------------------
// PAGE ACCUEIL <<<<<<<<<<<<<<<
// ----------------------------

session_start();

require '../common/config.php';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/styles.css" />
    <title>Golden Book - Accueil</title>
</head>
<body>
    <header>
        <?php require '../common/header.php'; ?>
    </header>

    <main>

    <section class="home_text">

    <h1>Golden Book</h1>
    <p>Vous souhaitez faire partie de notre livre d'or ?</p>
    
    <?php if(!isset($_SESSION['id'])) : ?>
    
    <a href="inscription.php">Nous rejoindre</a>

    <?php else : ?>

    <a href="commentaire.php">Ajouter un commentaire</a>

    <?php endif ?>
    
    </section> 

    </main>

    <footer>
        <?php require '../common/footer.php'; ?>
    </footer>
</body>
</html>