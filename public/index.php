<?php

session_start();
// script d'entrée de l'application avec découpe du rendu html 

require './../MVC/views/_header.php';
require "./../MVC/service/router.php";
require './../MVC/views/_footer.php';
