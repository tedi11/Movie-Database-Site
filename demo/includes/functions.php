<?php
function runtime_prettier($time){
    $hours = intdiv($time, 60).':'. ($time % 60);
    return $hours;
};
function find_movie_by_title($item){
    if(stripos($item['title'], $_GET['s'])=== false)
    return false;
    else return true;
};
function find_movie_by_id($item){
    if(!isset($_GET['movie_id'])) return false;
    if(intval($_GET['movie_id']) === $item['id']) return true;
    else return false;
};
function dbConnect($host = "localhost", $username = "root", $password = "root", $dbname = "local"){
    return mysqli_connect($host , $username , $password , $dbname);
}
?>