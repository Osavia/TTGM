<h1>Modifier cette actualité</h1>


<form method="post">
    <div>
        <label for="article_title">Titre</label>
        <input type="text" id="article_title" name="article_title" value="<?php echo htmlentities($options["article"]->getTitle()) ?>">
    </div>
    <div>
        <label for="article_content">Description</label>
        <input type="text" id="article_content" name="article_content" value="<?php echo htmlentities($options["article"]->getContent()) ?>"></input>
    </div>
    <input type="hidden" name="id" value="<?php echo $options["article"]->getId() ?>">
    <button>Enregistrer</button>
</form>