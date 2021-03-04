
<?php require "bootstrap.php"; ?>


<?php 
if (isset($_POST['login_save'])):?>
    <?php echo $login_user->login(); ?>
    <?php endif ?>

<?php require "view/view.login.php"; ?>