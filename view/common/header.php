<nav>
  
  <div class="logo">
  <a id="logo" href="accueil.php"><img src="../../public/img/open-book.png" width="24" height="24"> &nbsp;Golden Book</a>
  </div>

  <ul>
  
    <li><a href="livre-or.php">Livre d'or</a></li>

    <?php if(isset($_SESSION['id'])) : ?>
      
      
      <li><a href="../pages/commentaire.php">Ajouter un commentaire</a></li>
      <li><a href="profil.php">Profil</a></li>
      <li><a href="../common/deconnexion.php">Déconnexion</a></li>

    <?php else : ?>
        
      <li><a href="inscription.php">Inscription</a></li>
      <li><a href="connexion.php">Connexion</a></li>

    <?php endif ?>

  </ul>
</nav>