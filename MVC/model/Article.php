<?php

class Article
{
    private int $id;
    private string $content;
    // @var string|null $title 
    private ?string $title;
    private string $image_path;
    private ?string $published_date;

    public function __construct()
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getImage(): string
    {
        return $this->image_path;
    }

    public function setImage(string $image_path): void
    {
        $this->image_path = $image_path;
    }

    /**
     * @return string
     */
    public function getPublishedDate(): string
    {
        return $this->published_date;
    }

    /**
     * @param string $published_date
     */
    public function setPublishedDate(string $published_date): void
    {
        $this->published_date = $published_date;
    }
}
