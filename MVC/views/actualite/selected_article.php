<?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>

    <h1>Modifier cette actualité</h1>


    <form action="?page=updated_article_check&id=<?= $options["article"]->getId() ?>" method="post">
        <div>
            <label for="article_title">Titre :</label>
            <input type="text" id="article_title" name="article_title" required value="<?php echo htmlentities($options["article"]->getTitle()) ?>">
        </div>
        <div>
            <label for="article_content">Description :</label>
            <input type="text" id="article_content" name="article_content" required value="<?php echo htmlentities($options["article"]->getContent()) ?>"></input>
        </div>
        <div class="image-actualite">
        <label > Image :</label>
            <div class="img">
                <div class="adaptive-img--contain">
                    <span>
                        <img src="<?php echo $options["article"]->getImage() ?>" alt="">
                    </span>
                </div>
            </div>
        </div>
        <div>
            <label for="image">Si vous souhaitez modifier votre image :</label>
            <input type="file" id="image" name="image">
        </div>

        <!-- rajouter l'image (la montrer) => OK
         Si aucun changement => on garde l'image
         Si changement => on la modifie -->

        <input type="hidden" name="id" value="<?php echo $options["article"]->getId() ?>">
        <button>Enregistrer</button>
    </form>

<?php } else { ?>

    ERREUR : VOUS DEVEZ VOUS CONNECTER

<?php } ?>