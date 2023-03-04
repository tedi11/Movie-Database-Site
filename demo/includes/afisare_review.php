<br><div class="alert alert-<?php echo $review_data['alert'] ?>" role="<?php $review_data['alert'] ?>">
<?php echo $review_data['message'] ?>
</div>
<?php

$sql = "SELECT full_name, email, review FROM reviews WHERE movie_id=" . $_GET['movie_id'];
$reviews_list = mysqli_query($conn, $sql);
?>