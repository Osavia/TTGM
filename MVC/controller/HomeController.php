<?php
require_once './../MVC/controller/Controller.php';

// classe fille HomeController de la classe mére controller permettant de gérer la logique métier
class HomeController extends Controller
{

    // constructeur initialisant la propriété $path de la classe mére 
    public function __construct()
    {
        parent::__construct("./../MVC/views/home.php");
    }

    // méthode de rendue renvoyant un array avec la date du jour
    public function dateNow()
    {
        $this->renderView(["dateNow" => new DateTime("now")]);
    }

}
