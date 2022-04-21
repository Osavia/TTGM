    <!-- Affichage du page title : -->

    <div class="page-title">
        <div class="container-auto">
            <div class="page-path">
                <h1>Blog</h1>
                <div class="row-center">
                    <a href="?page=home">ACCUEIL</a>
                    <span> / ACTUALITÉ</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

  <h1 class="text-center">
    <?php echo ($options["article"]->getTitle()) ?>
  </h1>
  

      <div class="adaptive-img--contain viewed-image">
        <span>
          <img src="<?php echo $options["article"]->getImage() ?>" alt="">
        </span>
      </div>

  <h5>
    <?php echo ($options["article"]->getContent()) ?>
  </h5>