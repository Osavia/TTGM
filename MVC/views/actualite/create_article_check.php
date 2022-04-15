<?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>


  <div>
    <h5>Votre article a été ajouté avec succès !</h5>
    <p>Titre : <?php echo htmlentities($_POST['article_title']); ?></p>
    <p>Description : <?php echo strip_tags($_POST['article_content']); ?></p>
    <p>Image : <?php echo ('fichier envoyé avec succès'); ?></p>
  </div>
  <div>
    <a href="?page=create_article">Ajouter un nouvel article</a>
    <a href="?page=news">Retour aux articles</a>

  </div>

<?php } else { ?>

  ERREUR : VOUS DEVEZ VOUS CONNECTER

<?php } ?>