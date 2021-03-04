<?php require "bootstrap.php"; ?>

<?php 

if (isset($_SESSION['logged_user'])):?>

<?php require "view/view.picture.php"; ?>

<?php else: ?>

<?php require "view/view.picture.php"; ?>

<?php endif ?>
