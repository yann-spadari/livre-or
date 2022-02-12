<?php

// ----------------------------
// LIVRE D'OR <<<<<<<<<<<<<<<<<
// ----------------------------

session_start();

require '../common/config.php';

// Récupération des commentaires

$requete = $db->prepare("SELECT * FROM commentaires c INNER JOIN utilisateurs u ON c.id_utilisateur = u.id ORDER BY c.commentaire DESC");
$requete->execute(array());
$commentaire = $requete->fetchAll(PDO::FETCH_ASSOC);

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

    <div class="livreor_text">

    <h1>Tous les commentaires</h1>

    <p>Envie de poster quelque chose ? <?php if(isset($_SESSION['id'])) : ?><a href="commentaire.php">Par ici.</a><?php else : ?><a href="connexion.php">Par ici.</a><?php endif ?><p>


    </div>

    <div class="livreor">

    <?php foreach($commentaire as $key) : ?>

<div class="commentaire">
    <div class="com_container">
        <p>Posté par <?= $key['login'] ?>&nbsp;le&nbsp;</p>
        <p> </p>
        <p><?= $key['date']?> : </p>
    </div>
    <p><?= $key['commentaire'] ?></p>
</div>

<?php $_SESSION['login'] = $key['login']; ?>

<br>

<?php endforeach; ?>

    </div>

    </main>

    <footer>
        <?php require '../common/footer.php'; ?>
    </footer>
</body>
</html>