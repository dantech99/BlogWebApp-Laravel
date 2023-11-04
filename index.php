
<?php

// variables de navegacion
$home = "active";
$post = "";
$contacto = "";
$title = "Home"

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include "includes/head.php" ?>
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="public/css/App.css">
</head>
<body>
  <?php include "includes/navigation.php" ?>
  <?php include "includes/carousel.php" ?>
  <?php include "includes/header.php" ?>

  <main class="p-2 mt-5">
    <div class="container text-center">
      
      <div class="row">
      <div class="col-md-8">
        <h2 class="text-center m-4">Ultimas publicaciones</h2>
        <?php include "includes/postList.php" ?>
        </div>
        <div class="col-4 sidebar ">
        <h2 class="text-center m-4">Enlaces de Interes</h2>
        <?php include "includes/sidebar.php" ?>
        </div>
      </div>
    </div>
  </main>

  <?php include "includes/footer.php" ?>
  <?php include "includes/scripts.php" ?>
</body>
</html>