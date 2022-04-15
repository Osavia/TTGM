<?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>


    <h1>Confirmation de modification</h1>

    <div>

        <div>
            <h5>Rappel de vos modifications</h5>
            <p>Titre : <?php echo ($_POST['article_title']); ?></p>
            <p>Description : <?php echo strip_tags($_POST['article_content']); ?></p>
        </div>

    </div>

    <h4><a href="?page=news">Retour aux articles</a></h4>

<?php } else { ?>

    ERREUR : VOUS DEVEZ VOUS CONNECTER

<?php } ?>