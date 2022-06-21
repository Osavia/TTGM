    <!-- Affichage du page title : -->

    <div class="page-title">
      <div class="container-auto">
        <div class="page-path">
          <h1>Actualité</h1>
          <div class="row-center">
            <a href="?page=home">ACCUEIL</a>
            <span> / ACTUALITÉ</span>
          </div>
        </div>
      </div>
    </div>

    <div class="container-auto">

      <div class="text-center">
        <h1>
          <?php echo ($options["article"]->getTitle()) ?>
        </h1>
        <p>
          <?php echo (new DateTime($options["article"]->getPublishedDate()))->format("d-m-Y") ?>
        </p>
      </div>

    </div>

    <div>

      <div class="container contain-viewed-image">
        <div class="adaptive-img--contain viewed-image">
          <span>
            <img src="<?php echo $options["article"]->getImage() ?>" alt="Actualité du train">
          </span>
        </div>

        <p class="description-viewed-image">
          <?php echo ($options["article"]->getContent()) ?>
        </p>

      </div>