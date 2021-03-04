<?php require "bootstrap.php"; ?>

<?php if(isset($_GET['php_submit'])): ?>

<?php $show_video = $play->play_video('video'); ?> 

<!-- <?php echo "<pre>"; ?>
<?php var_dump($show_video); ?>
<?php echo "</pre>"; ?> -->


<?php elseif(isset($_GET['laravel_submit'])): ?>

<?php $laravel_show_video = $laravel_play->play_video('laravel'); ?> 

<!-- <?php echo "<pre>"; ?>
<?php var_dump($laravel_show_video); ?>
<?php echo "</pre>"; ?> -->

<?php endif; ?>

<?php require "view/view.play.video.php"; ?>