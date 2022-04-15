<div class="row">

    <H1>L'actualité</H1>

    <?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>
        <div>
            <a href="?page=create_article">Ajouter un article</a>
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

<!-- Affichage de la liste des articles : -->

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
                                <a href="?page=selected_article&id=<?= $article->getId() ?>" title="Modifier cet article">Modifier</a>
                            </td>
                            <td>
                                <button class="displayBtns" data-title_article="<?= $article->getTitle() ?>" data-id_article="<?= $article->getId() ?>">Supprimer</button>
                            </td>
                            <?php } ?>
                    </tr>
                        <?php }
            } ?>
        </tbody>
    </table>
</div>

<!-- Modale de confirmation de suppresion : -->

<div class="myPopup">
    <h2>Voulez-vous vraiment supprimer cet article :
        <span id="show_title_article"></span> numéro <span id="show_id_article"></span>?
    </h2>
    <div class="row" >
        <a id="myLink" href="" title="Ceci supprimera l'article définitivement">
            Oui
        </a>
        <span id="closePopup">Non</span>
    </div>
</div>