<?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>

  <?php var_dump('test') ?>

  <h1>
    <?php echo ($options["article"]->getTitle()) ?>
  </h1>

  <h4>
    <?php echo ($options["article"]->getContent()) ?>
  </h4>


  <div class="image-actualite">
    <div class="img">
      <div class="adaptive-img--contain">
        <span>
          <img src="<?php echo $options["article"]->getImage() ?>" alt="">
        </span>
      </div>
    </div>
  </div>

<?php } else { ?>

  ERREUR : VOUS DEVEZ VOUS CONNECTER

<?php } ?>