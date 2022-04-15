<?php
require_once './../MVC/controller/Controller.php';

// classe fille LinkController de la classe mére controller permettant de gérer la logique métier
class CreateArticleController extends Controller
{

    // constructeur initialisant la propriété $path de la classe mére 
    public function __construct()
    {
        parent::__construct("./../MVC/views/actualite/create_article.php");
    }

}
