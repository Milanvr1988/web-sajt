<?php require "bootstrap.php"; ?>

<?php 

if (!isset($_SESSION['logged_user'])) {
   header('location:index.php');
}

?>

<?php 

if (isset($_GET['id'])) {
   $watch_singl_video = $watch->watch_video('video');
   // var_dump($watch_singl_video);
}elseif(isset($_GET['laravel_id'])) {
    $laravel_watch_singl_video = $laravel_watch->watch_laravel();
   // var_dump($laravel_watch_singl_video);
}
?>

<?php require "view/view.watch.video.php"; ?>










