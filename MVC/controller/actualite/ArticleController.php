<?php
require_once './../MVC/controller/Controller.php';
require_once './../MVC/repository/ArticleRepository.php';
require_once './../MVC/model/Article.php';

// classe fille LinkController de la classe mére controller permettant de gérer la logique métier
class ArticleController extends Controller
{

    // constructeur initialisant la propriété $path de la classe mére 
    public function __construct()
    {
        parent::__construct("./../MVC/views/actualite/actualite.php");
    }

    public function display()
    {
        $articleRepository = new ArticleRepository("article");
        $ListArticles = $articleRepository->displayAllArticles();
        $this->renderView(["ListArticles" => $ListArticles]);
    }

    public function create()
    {
        $this->setPath("./../MVC/views/actualite/create_article.php");

        if (
            isset($_POST["article_title"])
            && isset($_POST["article_content"])
            && !empty($_POST["article_title"])
            && !empty($_POST["article_content"])
            && strlen($_POST["article_title"]) < 256
            && strlen($_POST["article_content"])
            && isset($_FILES['image'])
            && $_FILES['image']['error'] == 0
        ) {

            // $fileInfo = pathinfo($_FILES['image']['name']);
            // $extension = $fileInfo['extension'];
            // $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
            // if (in_array($extension, $allowedExtensions)) {
            //     // On peut valider le fichier et le stocker définitivement
            move_uploaded_file($_FILES['image']['tmp_name'], './images/actualite/' . basename($_FILES['image']['name']));

            var_dump($_FILES);
            $article = new Article();
            $article->setTitle($_POST["article_title"]);
            $article->setContent($_POST["article_content"]);
            $article->setPublishedDate((new DateTime("now"))->format('Y-m-d H:i:s'));
            $article->setImage('./images/actualite/' . $_FILES['image']['name']);
            $articleRepository = new ArticleRepository("article");
            $articleRepository->insertArticle($article);
            $this->setPath("./../MVC/views/actualite/create_article_check.php");
        } else {
            echo ('Merci de selectionner un fichier');
            // Il vaudrait mieux renvoyer le message d'erreur dans la vue
        }


        $this->renderView();
    }

    public function read($path)
    {
        $this->setPath('../MVC/views/actualite/' . $path . '.php');

        $articleRepository = new ArticleRepository('article');

        $article = $articleRepository->selectArticle($_GET["id"]);
        // var_dump($article[0]);

        $this->renderView(["article" => $article[0]]);
    }

    public function updateSelected()
    {
        $this->setPath("../MVC/views/actualite/updated_article_check.php");

        $id = strip_tags($_GET['id']);
        $articleRepository = new ArticleRepository('article');
        $article = $articleRepository->selectArticle($id)[0];

        if (
            isset($_POST["article_title"])
            && isset($_POST["article_content"])
        ) {
            $article->setTitle($_POST["article_title"]);
        }

        if (
            !empty($_POST["article_title"])
            && !empty($_POST["article_content"])
        ) {
            $article->setContent($_POST["article_content"]);
        }
        
        if (
            isset($_FILES['image'])
            && $_FILES['image']['error'] == 0
            ) {
            var_dump('lol');
            move_uploaded_file($_FILES['image']['tmp_name'], './images/actualite/' . basename($_FILES['image']['name']));
            $article->setImage('./images/' . $_FILES['image']['name']);
        }


        $articleRepository->updateArticle($article, $id);
        var_dump($article);
        $this->renderView(["article" => $article]);
    }

    public function delete()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {

            $id = strip_tags($_GET['id']);
            $this->setPath("./../MVC/views/actualite/delete_article.php");
            $articleRepository = new ArticleRepository("article");
            $articleRepository->deleteArticle($id);
            $this->renderView();
        }
    }
}





// public function updateSelected()
//     {
//         $this->setPath("../MVC/views/actualite/updated_article_check.php");

//         $id = strip_tags($_GET['id']);
//         var_dump($id);
//         var_dump($_POST["article_title"]);

//         $article = new Article();
//         $article->setTitle($_POST["article_title"]);
//         $article->setContent($_POST["article_content"]);

//         $articleRepository = new ArticleRepository('article');
//         $article = $articleRepository->updateArticle($article, $id);

//         $this->renderView();
//     }