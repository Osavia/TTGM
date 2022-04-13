<h1>Modifier cette actualité</h1>


<div>
    <form method="POST">
        <div>
            <label for="article_title">Titre</label>
            <input type="text" id="article_title" name="article_title">
        </div>
        <div>
            <label for="article_content">Description</label>
            <textarea id="article_content" name="article_content" value="<?php $article->$id ?>"></textarea>
        </div>
        <input type="submit" value="Modifier l'article">

    </form>
</div>

<?php 

var_dump($_GET['id']);
echo $article->getTitle();

?>