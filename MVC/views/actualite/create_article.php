<?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>

<div class="container-auto">

    <h1>Ajouter une actualité</h1>


    <div>
        <form action="?page=create_article_check" method="POST" enctype="multipart/form-data" class="form">
            <div>
                <label for="article_title">Titre :</label>
                <input type="text" id="article_title" name="article_title" required>
            </div>
            <div>
                <label for="article_content">Description :</label>
                <textarea id="article_content" name="article_content" required></textarea>
            </div>
            <div>
                <label for="image">Image :</label>
                <input type="file" id="image" name="image">
            </div>
            <button type="submit" value="Créer">Créer</button>

        </form>
    </div>


<?php } else { ?>

    ERREUR : VOUS DEVEZ VOUS CONNECTER

<?php } ?>