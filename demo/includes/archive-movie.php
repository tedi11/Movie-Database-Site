<div class="col-4"?>
    <div class="card" style="height: 730px;">
    <img src=<?php echo $movie['posterUrl'] ?> class="card-img-top" alt="..." >
    <div class="card-body">
    <h5 class="card-title"><?php echo $movie['id'] ?><?php echo '-' ?><?php echo $movie['title']?></h5>
    <p class="card-text"><?php echo $movie['plot']?></p>
    <a href="movie.php?movie_id=<?php echo $movie['id'];?>" class="btn btn-primary">Read more</a>
    </div>
    </div>
    </div>