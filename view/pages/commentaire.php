<?php

// ----------------------------
// PAGE AJOUT COMMENTAIRE <<<<<<<<<<<<<<<
// ----------------------------

session_start();

require '../common/config.php';

?>

<?php

// Vérification si l'utilisateur s'est connecté correctement

if (!isset($_SESSION['id']))
{
    header('Location:accueil.php?connexion_error');

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../../public/css/styles.css" />
    <title>Golden Book - Ajout de commentaire</title>
</head>
<body>
    <header>
        <?php require '../common/header.php'; ?>
    </header>

    <main>

    <div class="center">

            
            <h1>Ajout de commentaire</h1>
            
            <form method="post">

                <textarea name="commentaire" placeholder="Veuillez écrire votre commentaire" required></textarea>

                <input type="submit" name="formsend" value="Poster un commentaire">
                
                <div class="signup_link">
                    <p>Vous souhaitez voir nos commentaires ?</p><br>
                    <a href="livre-or.php">Cliquez ici.</a>
                </div>

                <?php
                
                if(isset($_POST) && !empty($_POST)) {

                // Vérification champ commentaire

                    if(!empty($_POST['commentaire'])) {

                        $commentaire = htmlspecialchars($_POST['commentaire']);

                        // Insertion du commentaire en base de données

                        $insertCom = $db->prepare('INSERT INTO commentaires(commentaire, id_utilisateur, date) VALUES(:commentaire, :id_utilisateur, NOW())');
                        $insertCom->execute(array('commentaire' => $commentaire,'id_utilisateur' => $_SESSION['id']));
                        
                        echo '<div class= "success_php">' ."Votre commentaire a été ajouté avec succès." . '</div><br>';

                    }
                }

                ?>
            
            </form>
    </div>

    </main>

    <footer>
        <?php require '../common/footer.php'; ?>
    </footer>
</body>
</html>