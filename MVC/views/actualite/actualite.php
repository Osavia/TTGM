    <!-- Affichage du page title : -->

    <div class="page-title">
        <div class="container-auto">
            <div class="page-path">
                <h1>Actualité</h1>
                <div class="row-center">
                    <a href="?page=home">ACCUEIL</a>
                    <span> / ACTUALITÉ</span>
                </div>
            </div>
        </div>
    </div>


    <div class="container-auto">

        <!-- Affichage de la liste des articles : -->

        <ul class="grid">

            <?php if (isset($options["ListArticles"])) {
                foreach ($options["ListArticles"] as $key => $article) { ?>
                    <li>
                        <a href="?page=viewed_article&id=<?= $article->getId() ?>" title="Voir cette actualité">

                            <article class="grid-card">

                                <div class="adaptive-img--cover image-actualite">
                                    <span>
                                        <img src="<?php echo $article->getImage() ?>" alt="">
                                    </span>
                                </div>

                                <h4>
                                    <?php echo htmlentities($article->getTitle()) ?>
                                </h4>

                                <div class="post-date">
                                    <span class="post-date-day">
                                        <?php echo (new DateTime($article->getPublishedDate()))->format("d") ?>
                                    </span>
                                    <span class="post-date-month">
                                        <?php
                                        $month = (new DateTime($article->getPublishedDate()))->format("m");

                                        switch ($month) {
                                            case '01':
                                                $month = 'JAN';
                                                echo $month;
                                                break;
                                            case '02':
                                                $month = 'FÉV';
                                                echo $month;
                                                break;
                                            case '03':
                                                $month = 'MARS';
                                                echo $month;
                                                break;
                                            case '04':
                                                $month = 'AVR';
                                                echo $month;
                                                break;
                                            case '05':
                                                $month = 'MAI';
                                                echo $month;
                                                break;
                                            case '06':
                                                $month = 'JUIN';
                                                echo $month;
                                                break;
                                            case '07':
                                                $month = 'JUIL';
                                                echo $month;
                                                break;
                                            case '08':
                                                $month = 'AOÛT';
                                                echo $month;
                                                break;
                                            case '09':
                                                $month = 'SEPT';
                                                echo $month;
                                                break;
                                            case '10':
                                                $month = 'OCT';
                                                echo $month;
                                                break;
                                            case '11':
                                                $month = 'NOV';
                                                echo $month;
                                                break;
                                            case '12':
                                                $month = 'DÉC';
                                                echo $month;
                                                break;
                                            default:
                                                $month = 'ND';
                                                echo $month;
                                                break;
                                        }
                                        ?>
                                    </span>
                                </div>

                            </article>

                        </a>

                        <?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>
                            <div class="admin-option row-around">
                                <div class="admin-btn--upload">
                                    <a href="?page=selected_article&id=<?= $article->getId() ?>" title="Modifier cet article">MODIFIER</a>
                                </div>
                                <div class="admin-btn--delete">
                                    <a class="displayBtns" data-title_article="<?= $article->getTitle() ?>" data-id_article="<?= $article->getId() ?>">SUPPRIMER</a>
                                </div>
                            </div>
                        <?php } ?>

                    </li>

            <?php }
            } ?>
        </ul>

        <!-- Modale de confirmation de suppresion : -->

        <div class="myPopup">

            <div class="delete-confirmation">
                <p>Voulez-vous vraiment supprimer cet article :</p>
                <span id="show_title_article"></span>
                <p>Attention, cette action est irréversible</p>
            </div>


            <div class="row-around">
                <span id="validePopup">
                    <a id="myLink" href="" title="Ceci supprimera l'article définitivement">
                        Oui
                    </a>
                </span>
                <span id="closePopup">Non</span>
            </div>

        </div>


        <div class="row-around admin-setup">

            <?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>
                <div class="admin-btn--create">
                    <a href="?page=create_article">Ajouter un article</a>
                </div>
            <?php } ?>

            <!-- Affichage du bouton de connexion / deconnexion : -->

            <?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) { ?>

                <div class="admin-btn--log">
                    <a href="?page=logout">SE DECONNECTER</a>
                </div>

            <?php } else { ?>
                <div class="admin-btn--log">
                    <a href="?page=login">SE CONNECTER</a>
                </div>

            <?php } ?>

        </div>