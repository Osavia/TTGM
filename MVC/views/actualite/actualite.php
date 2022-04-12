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
            <?php if (isset($options["articles"])) {
                foreach ($options["articles"] as $key => $article) { ?>
                    <tr>
                        <td><?php echo $article->getTitle() ?></td>
                        <td><?php echo $article->getPublishedDate() ?></td>
                        <td><?php echo $article->getContent() ?></td>
                    </tr>
            <?php }
            } ?>
        </tbody>
    </table>
</div>