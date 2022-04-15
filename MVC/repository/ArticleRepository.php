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
        $sql = "INSERT INTO article(title, content, image_path, published_date) VALUE(:title, :content, :image_path, :published_date);";
        $params = [
            ":title"=> $article->getTitle(),
            ":content"=> $article->getContent(), 
            ":image_path"=> $article->getImage(),
            ":published_date"=> $article->getPublishedDate()
        ];        
        return ($this->executeSQL($sql, $params));
    }

    public function selectArticle($id)
    {
        $sql = "SELECT * FROM article WHERE id = :id ;";
        $params = [
            ":id" => $id
        ];

        $query = $this->executeSQL($sql, $params);
        return $query->fetchAll(PDO::FETCH_CLASS, "article");
    }

    public function updateArticle(Article $article, $id)
    {

        $sql = "UPDATE article SET title=:title, content=:content WHERE id = :id;";
        $params = [
            ":id"=> $id,
            ":title"=> $article->getTitle(),
            ":content"=> $article->getContent(), 
        ];        
        $query = $this->executeSQL($sql, $params);
        return $query->fetchAll(PDO::FETCH_CLASS, "article");
    }

    // PDP FETECH CLASS me renvoi un objet de ma classe Article
















    public function deleteArticle($id)
    {
        $sql = "DELETE FROM article WHERE id = :id;";
        $params = [
            ":id" => $id,
        ];
        return $this->executeSQL($sql, $params);
    }
}

