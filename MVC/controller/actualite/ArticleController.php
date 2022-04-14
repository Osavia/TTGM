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
            isset($_POST["article_title"]) && isset($_POST["article_content"]) &&
            !empty($_POST["article_title"]) && !empty($_POST["article_content"])
        ) {
            $article = new Article();
            $article->setTitle($_POST["article_title"]);
            $article->setContent($_POST["article_content"]);
            $article->setPublishedDate((new DateTime("now"))->format("d/m/y"));
            $articleRepository = new ArticleRepository("article");
            $articleRepository->insertArticle($article);
        }

        $this->renderView();
    }

    public function select()
    {
        $this->setPath("../MVC/views/actualite/selected_article.php");

        $articleRepository = new ArticleRepository('article');

        $article = $articleRepository->selectArticle($_GET["id"]);
        var_dump($article[0]);

        $this->renderView(["article" => $article[0]]);
        
    }

    public function updateSelected()
    {
        $this->setPath("../MVC/views/actualite/actualite.php");

        $articleRepository = new ArticleRepository('article');

        $article = $articleRepository->selectArticle($_GET["id"]);
        var_dump($article[0]);

        $this->renderView(["article" => $article[0]]);
    }

    public function delete()
    {
        if (isset($_GET['id']) && !empty($_GET['id']))
        {

            $id = strip_tags($_GET['id']);
            $this->setPath("./../MVC/views/actualite/delete_article.php");
            $articleRepository = new ArticleRepository("article");
            $articleRepository->deleteArticle($id);
            $this->renderView();

        }
    }
}
