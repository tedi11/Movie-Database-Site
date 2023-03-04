<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<script type="text/javascript" src="main.js"></script>

<div id="preloader" > 
    <div style="display: none">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/fXfP2cu8bds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/fXfP2cu8bds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/fXfP2cu8bds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        
        
    </div>
</div>


<?php define('INITIALE', "CT"); ?>
    <div>
       <?php $navbar = array(
            array(
            'nume' => INITIALE,
            'href' => "index.php"
            ),
            array(
                'nume' => "Home",
                'href' => "index.php"
            ),
            array(
                'nume' => "Movies",
                'href' => "index.php"
            ),
            array(
                'nume' => "Contact",
                'href' => "index.php"
                )      
            );

        ?>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <div class="container-fluid">
            <a class="navbar-brand" href="#"><?php echo INITIALE ?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link"  href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="movies.php">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    </ul>
                    <?php require_once('includes/search-form.php') ?>
                
            </div>
            </div>
        </nav>
        <?php
        include 'includes/functions.php';
        $current_file = basename($_SERVER['SCRIPT_FILENAME']);
        if(!(in_array($current_file, array('index.php','contact.php')))){
          $movies = json_decode(file_get_contents('C:\Users\tudor\Local Sites\siteatestat\app\public\demo\assets\movies-list-db.json'), true)['movies'];
        }
          ?>
    <script>

        var loader = document.getElementById("preloader");

        window.addEventListener("load", function(){
            loader.style.display = "none";
        })

    </script>