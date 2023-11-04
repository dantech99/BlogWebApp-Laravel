<?php

require_once "lib/Post.php";

$posts = array (
  new Post("Post 1", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.", "Author 1", "01/01/2021", "tecnologia"),
  new Post("Post 2", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.", "Author 2", "01/01/2021", "tecnologia"),
  new Post("Post 3", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.", "Author 3", "01/01/2021", "tecnologia"),
  new Post("Post 4", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.", "Author 4", "01/01/2021", "tecnologia"),
  new Post("Post 5", "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, voluptatum.", "Author 5", "01/01/2021", "tecnologia"),

);

// array para el carousel
$carousel = array (

)

?>



  <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <?php $i = 0; foreach ($posts as $article): ?>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?php echo $i; ?>" <?php if ($i === 0) echo 'class="active" aria-current="true"'; ?> aria-label="Slide <?php echo $i + 1; ?>"></button>
    <?php $i++; endforeach; ?>
  </div>
  <div class="carousel-inner">
  <?php $i = 0; foreach ($posts as $article): ?>
      <div class="carousel-item <?php if ($i === 0) echo 'active'; ?>">
        <img src="https://th.bing.com/th/id/R.63f54f3e277ef934ccba0be998172ba8?rik=qlbKFZn0HSwgww&pid=ImgRaw&r=0" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $article->title; ?></h5>
          <p>Some representative placeholder content for the slide <?php echo $i + 1; ?>.</p>
        </div>
      </div>
    <?php $i++; endforeach; ?>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

