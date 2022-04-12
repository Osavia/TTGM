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

    public function index()
    {
        $articleRepository = new ArticleRepository("article");
        $articles = $articleRepository->findAll();
        $this->renderView(["articles"=> $articles]);
    }

    public function add()
    {
        if (isset($_SESSION["user_is_connect"]) && $_SESSION["user_is_connect"]) {
            $this->setPath("./../MVC/views/actualite/add_article.php");   
            if (isset($_POST["article_title"]) && isset($_POST["article_content"]) &&
            !empty($_POST["article_title"]) && !empty($_POST["article_content"])) {
                $article = new Article();
                $article->setTitle($_POST["article_title"]);
                $article->setContent($_POST["article_content"]);
                $article->setPublishedDate((new DateTime("now"))->format("Y-m-d h:i:s"));
                $articleRepository = new ArticleRepository("article");
                $articleRepository->insert($article);
            }
        }
        $this->renderView();
    }

}
