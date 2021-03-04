<?php require ('bootstrap.php'); ?>

<?php 
if (isset($_POST['upload'])) {
    
    $upload_video->upload_video();
}
?>

<?php require ('view/view.upload_video.php'); ?>