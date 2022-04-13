<div class="row">

    <H1>L'actualité</H1>

    <?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>
        <div>
            <a href="?page=add_article">Ajouter un article</a>
        </div>
    <?php } ?>


    <?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>

        <a href="?page=logout">
            <button>
                SE DECONNECTER
            </button>
        </a>
    <?php } else { ?>
        <a href="?page=login">
            <button>
                SE CONNECTER
            </button>
        </a>
    <?php } ?>


</div>

<!-- Liste des articles : -->

<div>
    <table>
        <thead>
            <tr>
                <th>Titre</th>
                <th>Date de publication</th>
                <th>Content</th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($options["ListArticles"])) {
                foreach ($options["ListArticles"] as $key => $article) { ?>
                    <tr>
                        <td><?php echo $article->getTitle() ?></td>
                        <td><?php echo $article->getPublishedDate() ?></td>
                        <td><?php echo $article->getContent() ?></td>
                        <?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>
                            <td>
                                <a href="?page=update_article&id=<?= $article->getId() ?>">Modifier</a>
                            </td>
                            <td>
                                <button class="displayBtns">Supprimer</button>
                            </td>
                            <?php } ?>
                    </tr>
                        <?php }
            } ?>
        </tbody>
    </table>
</div>


<?php
var_dump($article->getId()) ;
var_dump($article->getTitle()) ;
?>

<!-- Modale de confirmation de suppresion : -->

<div class="myPopup">
    <div class="row">
        <h2>Voulez-vous vraiment supprimer cet article : <?= $article->getTitle() ?> ?</h2>

        <a href="?page=delete_article&id=<?= $article->getId() ?>">Oui</a>
        <span id="closePopup">Non</span>
    </div>

</div>