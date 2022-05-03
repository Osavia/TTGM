<?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>

    <div class="container-auto">

        <h1>Confirmation de modification</h1>

        <div>
            <div>
                <h5>Rappel de vos modifications</h5>
                <p>Titre : <?php echo ($_POST['article_title']); ?></p>
                <p>Description : <?php echo strip_tags($_POST['article_content']); ?></p>
            </div>
            <label> Image :</label>
            <div class="adaptive-img--contain viewed-image">
                <span>
                    <img src="<?php echo $options["article"]->getImage() ?>" alt="">
                </span>
            </div>
        </div>

        <h4><a href="?page=news">Retour aux articles</a></h4>

    <?php } else { ?>

        ERREUR : VOUS DEVEZ VOUS CONNECTER

    <?php } ?>