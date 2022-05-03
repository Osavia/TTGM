<?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>


<div class="container-auto">

    
    <h1>Modifier cette actualité</h1>
    
    
    <form action="?page=updated_article_check&id=<?= $options["article"]->getId() ?>" method="post" enctype="multipart/form-data" class="form">
        <div>
            <label for="article_title">Titre :</label>
            <input type="text" id="article_title" name="article_title" required value="<?php echo htmlentities($options["article"]->getTitle()) ?>">
        </div>
        <div>
            <label for="article_content">Description :</label>
            <input type="text" id="article_content" name="article_content" required value="<?php echo htmlentities($options["article"]->getContent()) ?>"></input>
        </div>
        <label > Image :</label>
        <div class="viewed-image">
                <img src="<?php echo $options["article"]->getImage() ?>" alt="">
        </div>
        <div>
            <label for="image">Si vous souhaitez modifier votre image :</label>
            <input type="file" id="image" name="image">
        </div>
        
        <!-- rajouter l'image (la montrer) => OK
        Si aucun changement => on garde l'image OK
        Si changement => on la modifie -->
        
        <input type="hidden" name="id" value="<?php echo $options["article"]->getId() ?>">
        <button>Enregistrer</button>
    </form>
    
    <?php } else { ?>
        
        ERREUR : VOUS DEVEZ VOUS CONNECTER
        
        <?php } ?>
    