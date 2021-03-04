<?php require "bootstrap.php"; ?>

<?php 

if (isset($_SESSION['logged_user'])):?>

<?php require "view/view.about_me.php"; ?>

<?php else: ?>

<?php require "view/view.about_me.php"; ?>

<?php endif ?>



