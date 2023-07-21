<?php

require_once "lib/Post.php";


$posts = array (
  new Post("Post 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.", "Author 1", "01/01/2021", "tecnologia"),
  new Post("Post 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.", "Author 2", "01/01/2021", "tecnologia"),
  new Post("Post 3", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.", "Author 3", "01/01/2021", "tecnologia"),
  new Post("Post 4", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.", "Author 4", "01/01/2021", "tecnologia"),
  new Post("Post 5", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.", "Author 5", "01/01/2021", "tecnologia"),

)

?>

<?php foreach ($posts as $article): ?>   
<div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
    <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 text-primary"><?php echo $article->category; ?></strong>
        <h3 class="mb-0"><?php echo $article->title; ?></h3>
      <div class="mb-1 text-muted">Nov 12</div>
        <p class="card-text mb-auto"><?php echo $article->content; ?></p>
          <a href="#" class="stretched-link">Continue reading</a>
    </div>
    <div class="col-auto d-none d-lg-block">
      <img src="https://th.bing.com/th/id/R.63f54f3e277ef934ccba0be998172ba8?rik=qlbKFZn0HSwgww&pid=ImgRaw&r=0" class="img-fluid rounded-start" alt="...">
    </div>
</div>
 <?php endforeach; ?>
      
       