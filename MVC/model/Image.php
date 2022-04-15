<?php

class Image {

  private int $id;

  private string $path;

  public function __construct()
  {
  }

  public function getId(): int
  {
      return $this->id;
  }

  public function setId(int $id): void
  {
      $this->id = $id;
  }

  public function getPath(): string
  {
      return $this->path;
  }

  public function setPath(string $path): void
  {
      $this->path = $path;
  }

}

?>