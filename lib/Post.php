<?php 
class Post {
  public $title;
  public $content;
  public $author;
  public $date;
  public $category;


  public function __construct($title, $content, $author, $date, $category) {
    $this->title = $title;
    $this->content = $content;
    $this->author = $author;
    $this->date = $date;
    $this->category = $category;
  }
}
?>

