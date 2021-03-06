<?php

abstract class Controller
{
    // initialisation de la propriété path 
    private string $path;

    // constructeur initialisant la propriété path à l'intanciation de l'objet
    public function __construct(string $path)
    {
        $this->path = $path;
    }

    public function setPath(string $path)
    {
        $this->path = $path;
    }
    
    // méthode qui renvoie le fichier de template correspondant selon le chemin donné avec une variable options[]
    public function renderView(array $options = ["error404" => "Page not found: l'URL demandée n'est pas attribuée"])
    {
        // var_dump($this->path);

        require $this->path;
    }

}
