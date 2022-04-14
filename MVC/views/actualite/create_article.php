<h1>Ajouter une actualité</h1>

<?php if (
    (!isset($_POST['article_title']) || !isset($_POST['article_content']))
    || (empty($_POST['article_title']) || empty($_POST['article_content']))
) { ?>
    <div>
        <form method="POST">
            <div>
                <label for="article_title">Titre</label>
                <input type="text" id="article_title" name="article_title">
            </div>
            <div>
                <label for="article_content">Description</label>
                <textarea id="article_content" name="article_content"></textarea>
            </div>
            <input type="submit" value="Créer">

        </form>
    </div>
    <?php echo ('Pour ajouter un article, merci de bien remplir les champs "Titre" et "Description".'); ?>

<?php } else { ?>

    <?php echo ('Votre article a été ajouté avec succès'); ?>
    <div>
        <a href="?page=create_article">Ajouter un nouvel article</a>
    </div>
    
<?php } ?>