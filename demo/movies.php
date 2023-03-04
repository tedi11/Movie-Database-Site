<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chitu Tudor</title>

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<?php  require_once('includes/header.php') ?>
      <div class="container">
        <h1>Movies</h1>
        <div class="container overflow-hidden">
          <div class="row gy-5">
          <?php $i=0;
          foreach($movies as $movie){
            $i++; include 'includes/archive-movie.php';}
          ?>
          </div>
        </div>
      </div>
  </div>
  <?php  require_once('includes/footer.php') ?>
</body>
</html>