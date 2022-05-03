<?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>

<div class="container-auto">

  <h1>Article supprimé !</h1>

  <h4><a href="?page=news">Retour aux articles</a></h4>

<?php } else { ?>

  ERREUR : VOUS DEVEZ VOUS CONNECTER

<?php } ?>