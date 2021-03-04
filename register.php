<?php require "bootstrap.php"; ?>

<?php 
if (isset($_POST['save'])):?>

<?php  echo $register_user->register(); ?>


<?php endif ?>


<?php require "view/view.register.php"; ?>