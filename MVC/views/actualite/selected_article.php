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
        <div>
            <label for="image">Image :</label>
            <input type="file" id="image" name="image" value="<?php echo $options["article"]->getImage($_FILES['image']['name']) ?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $options["article"]->getId() ?>">
        <button>Enregistrer</button>
    </form>

<?php } else { ?>

    ERREUR : VOUS DEVEZ VOUS CONNECTER

<?php } ?>