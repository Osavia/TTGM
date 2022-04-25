<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/logo/TTGM-Logo-vert.png" type="image/x-icon">
    <link rel="stylesheet" href="/styles/css/style.css">
    <title>Train de Guîtres</title>

</head>

<body>

    <header>

        <div class="container">

            <nav class="row-between">

                <a href="?page=home">
                    <div class="adaptive-img--contain logo-header">
                        <span>
                            <img src="./images/logo/TTGM-Logo-vert.png" alt="Logo du Train Touristique de Guîtres" />
                        </span>
                    </div>
                </a>

                <!-- Navigation web : -->

                <div class="header-nav">
                    <ul class="benevole">
                        <li><a href="?page=benevole">DEVENIR BÉNÉVOLE</a></li>
                    </ul>
                    <ul class="navigation row-around">
                        <li><a href="?page=home">Accueil</a></li>
                        <li><a href="?page=news">Actualités</a></li>
                        <li>
                            <a href="?page=info">Informations pratiques</a>
                            <ul class="nagivation-under">
                                <li>
                                    <a href="?page=info#tarifs-horaires">Calendrier</a>
                                </li>
                                <li>
                                    <a href="?page=info#tarifs-horaires">Tarifs et horaires</a>
                                </li>
                                <li>
                                    <a href="?page=info#nous-trouver">Nous trouver</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=about_us">Qui sommes-nous ?</a>
                            <ul class="nagivation-under">
                                <li>
                                    <a href="?page=about_us#association">L'association</a>
                                </li>
                                <li>
                                    <a href="?page=about_us#materiel">Le matériel</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="?page=contact">Contact</a></li>
                    </ul>

                </div>

                <!-- Navigation mobile : -->

                <div class="nav--mobile">
                    <button type="button" id="button--mobile">Menu</button>
                </div>
                <!-- <div class="shadow-mobile" id="shadow-mobile"></div> -->
                <div class="menu--mobile" id="menu--mobile">
                    <span id="close--menu-mobile"></span>
                    <ul>
                        <li><a href="?page=home">Accueil</a></li>
                        <li><a href="?page=news">Actualités</a></li>
                        <li>
                            <a href="?page=info">Informations pratiques</a>
                            <ul>
                                <li>
                                    <a href="#tarifs-horaires">Tarifs et horaires</a>
                                </li>
                                <li>Calendrier</li>
                                <li>Nous trouver</li>
                            </ul>
                        </li>
                        <li><a href="?page=about_us">Qui sommes-nous ?</a></li>
                        <li><a href="?page=contact">Contact</a></li>
                        <li><a href="?page=benevole">DEVENIR BÉNÉVOLE</a></li>
                    </ul>
                </div>


            </nav>


        </div>
        <div class="movingDiv">
            <svg width="92" height="48" viewBox="0 0 92 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="1" width="35" height="39" fill="#C4C4C4" />
                <rect x="36" y="18" width="48" height="21" fill="#C4C4C4" />
                <rect y="37" width="92" height="2" fill="#C4C4C4" />
                <rect x="41" y="11" width="11" height="7" fill="#C4C4C4" />
                <rect x="68" y="1" width="5" height="17" fill="#C4C4C4" />
                <circle cx="26" cy="40" r="8" fill="#C4C4C4" />
                <circle cx="49" cy="40" r="8" fill="#C4C4C4" />
                <circle cx="72" cy="40" r="8" fill="#C4C4C4" />
            </svg>
        </div>

    </header>


    <main>



        <!-- <div id="admin">
                        <?php if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) {
                            echo ("Admin");
                        } ?>
            </div> -->