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

    public function displayAllArticles(): array
    {        
        $sql = "SELECT * FROM $this->table ORDER BY published_date DESC;";
        return ($this->executeSQL($sql))->fetchAll(PDO::FETCH_CLASS, "article");
    }
    
    public function insertArticle(Article $article)
    {
        $sql = "INSERT INTO article(title, content, published_date) VALUE(:title, :content, :published_date);";
        $params = [
            ":title"=> $article->getTitle(),
            ":content"=> $article->getContent(), 
            ":published_date"=> $article->getPublishedDate()
        ];        
        return ($this->executeSQL($sql, $params));
    }

    public function updateArticle(Article $article, Article $id)
    {

// idée :
// ETAPE 1 : Selectionner l'ID de l'article à modifier
// ETAPE 2 : Mettre à jour l'article en fonction de l'ID


        $sql = "SELECT * FROM article WHERE id = :id;";
        $params = [
            ":id"=> $id,
        ];
        $query = $this->executeSQL($sql, $params);
        $result= $query->fetch();


        $sql = "UPDATE article SET title=:title, content=:content, published_date=:published_date WHERE id = :id;";
        $params = [
            ":id"=> $id,
            ":title"=> $article->getTitle(),
            ":content"=> $article->getContent(), 
            ":published_date"=> $article->getPublishedDate()
        ];        
        return $this->executeSQL($sql, $params);
    }

    public function deleteArticle($id)
    {
        $sql = "DELETE FROM article WHERE id = :id;";
        $params = [
            ":id" => $id,
        ];
        return $this->executeSQL($sql, $params);
    }
}

