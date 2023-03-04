<?php
$review_data = array(
    "show_reviews_form" =>1,
    "alert" => 'success',
    "message" => 'Review-ul a fost adaugat cu succes!',
    "count"
);
$conn = dbConnect();

if(!$conn){
    die("Connection failed: " . mysqli_connect_errno());
}

$sql = "CREATE TABLE IF NOT EXISTS reviews (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    movie_id bigint(20) UNSIGNED NOT NULL,
    full_name tinytext NOT NULL,
    email VARCHAR(100) NOT NULL,
    review TEXT NOT NULL)";

    if(mysqli_query($conn, $sql)){

        $review_data['show_reviews_form'] = 1;

         $sql = "SELECT full_name, email, review FROM reviews WHERE movie_id=" . $_GET['movie_id'];
         $reviews_list = mysqli_query($conn, $sql);

        $review_data['count'] = mysqli_num_rows($reviews_list);
        if($review_data['count'] > 0){
            $review_data['list'] = mysqli_fetch_all($reviews_list, MYSQLI_ASSOC);
            $reviews_emails = array_column($review_data['list'], 'email');
        }

        if(isset($_POST['reviews_form'])){
            if(isset($reviews_emails) && in_array($_POST['email'], $reviews_emails)){
                $review_data['alert'] = 'danger';
                $review_data['message'] = 'Se pare ca ai mai introdus deja un review.';
                ?><br><div class="alert alert-danger" role="alert">
                <div class="h3">Se pare ca ai mai introdus deja un review.</div><?php
            }
            else{
                $sql = "INSERT INTO reviews(movie_id, full_name, email, review)
                VALUES ('". $_GET["movie_id"] ."', '". $_POST["full_name"] ."', '". $_POST["email"] ."', '". $_POST["review"] ."')";
                if(mysqli_query($conn, $sql)){
                    //a adaugat
                    $review_data['show_reviews_form'] = 2;
                    $review_data['alert'] = 'success';
                    $review_data['message'] = 'Review-ul a fost adaugat cu succes!';
                    // var_dump($review_data['list']);
                    $review_data['list'][] = array(
                        'full_name' => $_POST["full_name"],
                        'email' =>  $_POST["email"],
                        'review' => $_POST["review"],
                    );
                    $review_data['count']=$review_data['count']+1; 
                }
                else{  
                    //a dat eroare
                    $review_data['show_reviews_form'] = 3;
                    $review_data['alert'] = 'danger';
                    $review_data['message'] = 'A aparut o eroare, te rugam sa incerci iar.';
                }
            }
        }
    }
?>
<?php 
if($review_data["show_reviews_form"]==3){
?><br><div class="alert alert-<?php echo $review_data['alert'] ?>" role="<?php $review_data['alert'] ?>">
<?php echo $review_data['message'] ?>
</div><?php
include_once("includes\adauga_formular.php");}
if($review_data["show_reviews_form"]==1){
include_once("includes\adauga_formular.php");}
if($review_data["show_reviews_form"]==2){
include_once("includes\afisare_review.php");
}
?>
<?php if(isset($review_data['count']) && $review_data['count'] > 0) { ?>
    <div class="h3 mt-4">Reviews:</div>
    <?php foreach($review_data['list'] as $review){ ?>
        <div class="my-3 p-3 border">
            <div class="fw-bold pb-3 mb-3 border-bottom">
                <?php echo $review['full_name'];?>
            </div>
            <?php echo $review['review'];?>
        </div>
    <?php } ?>
<?php } 
else{ ?>
    <div class="h3 mt-4">Fii primul care lasa un review acestui film!</div> <?php
}?>