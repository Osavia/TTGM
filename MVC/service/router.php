<?php

require_once "./../MVC/controller/HomeController.php";
require_once "./../MVC/controller/actualite/ArticleController.php";
require_once "./../MVC/controller/InfoController.php";
require_once "./../MVC/controller/AboutUsController.php";
require_once "./../MVC/controller/BenevoleController.php";

require_once "./../MVC/controller/contact/ContactController.php";
require_once "./../MVC/controller/contact/ContactSubmitController.php";

require_once "./../MVC/controller/session/LogInController.php";
require_once "./../MVC/controller/session/LogOutController.php";

require_once "./../MVC/controller/error/Error404Controller.php";

// récupération  du paramètre "page" dans la variable d'environnement $_GET 

// initialisation et déclaration de la variable $page  
$page = NULL;
// Vérification de l'existence de la key "page" dans $_GET
if (array_key_exists("page", $_GET)) $page = $_GET["page"];
// var_dump($_GET["page"]);

// switch/case permettant de rediriger la requète vers le bon Controller
switch ($page) {
    case 'home':
        $home = new HomeController();
        $home->dateNow();
        break;
    case 'news':
        $article = new ArticleController();
        $article->index();
        break;
    case 'add_article':
        $article = new ArticleController();
        $article->add();
        break;
    case 'update_article':
        $article = new ArticleController();
        $article->update();
        break;
    case 'delete_article':
        $article = new ArticleController();
        $article->delete();
        break;
    case 'info':
        $info = new InfoController();
        $info->renderView();
        break;
    case 'about_us':
        $aboutus = new AboutUsController();
        $aboutus->renderView();
        break;
    case 'contact':
        $contact = new ContactController();
        $contact->renderView();
        break;
    case 'contact_sub':
        $contactsub = new ContactSubmitController();
        $contactsub->renderView();
        break;
    case 'benevole':
        $benevole = new BenevoleController();
        $benevole->renderView();
        break;
    case 'login':
        $login = new LogInController();
        $login->index();
        break;
    case 'logout':
        $logout = new LogOutController();
        $logout->renderView();
        break;
        // Valeur par défaut si la page demandé n'existe pas  
    default:
        $error = new Error404Controller();
        $error->renderView();
        break;
}
