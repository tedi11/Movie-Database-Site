<?php setcookie('fav_movies', time()+3600*24*365);?>
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
<?php  require_once('includes/header.php');?>
<?php $movie_id = $_GET['movie_id']-1;?>
        <div class="container">
            <h1><?php echo $movies[$movie_id]['title']?></h1> 
            <div class="row gy-5">
                <div class="col-3"><img src="<?php echo $movies[$movie_id]['posterUrl'] ?>" class="card-img-top" alt="..."></div>
                <div class="col-9"> 
                    <div><b>Description: </b> <?php echo $movies[$movie_id]['plot']?> </div>
                    <br><div>Directors: <b><?php echo $movies[$movie_id]['director'] ?></b></div>
                    <br><div>Released in: <b><?php echo $movies[$movie_id]['year'] ?></b></div>
                    <br><div>Runtime: <b><?php echo runtime_prettier($movies[$movie_id]['runtime'])?> hours</b></div>
                    <br><div>Genres: <b><?php foreach($movies[$movie_id]['genres'] as $element) {echo $element?> <?php }?></b></div>
                    <br><div><h3>Cast:</h3>
                <?php echo $movies[$movie_id]['actors']?>
                </div><br>
                <div><h3>Sectiune de reviews:</h3></div>
                <?php include_once("includes\movie-reviews.php");?>
                </div>
            </div>
        </div>  
    </div> <br>
    <?php  require_once('includes/footer.php') ?>
</body>
</html>