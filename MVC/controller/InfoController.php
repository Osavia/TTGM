<?php
require_once './../MVC/controller/Controller.php';

class InfoController extends Controller
{

    // constructeur initialisant la propriété $path de la classe mére 
    public function __construct()
    {
        parent::__construct("./../MVC/views/info.php");
    }

}
