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

<?php require_once 'includes/header.php'?>
    <?php if(isset($_GET['s']) && strlen($_GET['s']) >= 3 ) {$s = $_GET['s'];?>
        <h1>Search results for: <strong><?php echo $s;?></strong></h1>
    <?php  $movies=array_filter($movies, 'find_movie_by_title');
        if(count($movies) === 0){?>
        <p>No results!</p>
        <?php include('includes/search-form.php');}
    else {?>
        <div class="row movies-list">
        <?php foreach($movies as $movie) require('includes/archive-movie.php');?>
        </div>
    <?php }?>
    <?php }elseif(isset($_GET['s']) && strlen($_GET['s'])<3){ ?>
        <h1>Invalid search!</h1>
        <p>Too short seacrh querry.</p>
        <?php include('includes/search-form.php');?>
    <?php }else{ ?>
        <h1>Invalid search!</h1>
        <p>Try something else!</p>
        <?php include('includes/search-form.php');}?>
<?php require_once 'includes/footer.php'?>