<?php

require_once './../MVC/repository/Repository.php';
require_once "./../MVC/model/Article.php";

class ArticleRepository extends Repository
{
    private string $table;

    public function __construct(string $table)
    {
        $this->table = $table;
    }

    public function findAll(): array
    {        
        $sql = "SELECT * FROM $this->table ;";
        return ($this->executeSQL($sql))->fetchAll(PDO::FETCH_CLASS, "Article");
    }
    
    public function insert(Article $article)
    {
        $sql = "INSERT INTO article(title, content, published_date) VALUE(:title, :content, :published_date);";
        $params = [
            ":title"=> $article->getTitle(),
            ":content"=> $article->getContent(), 
            ":published_date"=> $article->getPublishedDate()
        ];        
        $this->executeSQL($sql, $params);
    }

    public function update(Article $article, Article $id)
    {
        $sql = "UPDATE article SET title=:title, content=:content, published_date=:published_date WHERE id = :id";

        $params = [
            ":id"=> $id, // Pourquoi pas le get ?
            ":title"=> $article->getTitle(),
            ":content"=> $article->getContent(), 
            ":published_date"=> $article->getPublishedDate()
        ];        
        $this->executeSQL($sql, $params);
    }
}

