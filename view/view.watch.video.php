<?php require "view/partials/header.php" ?>

                 

<?php if(isset($_GET['id'])): ?>
<div class="container"> 
    <div class="row">
        <div class="col-6">
        <?php foreach ($watch_singl_video as $watch): ?>
            <h4 class="float-left">Gledate: <ins><?php echo $watch; ?></ins> </h4> 
            <a href="play.video.php?php_submit"> <button type="submit" class="btn btn-warning btn-sm">Povratak na listu videa Php-a </button> </a>
            <video width="860" height="600" controls>
            <source src="<?php echo $watch; ?>" type="video/mp4">
            </video>
        <?php endforeach ?>
        </div>
    </div>
</div><br>

<?php elseif(isset($_GET['laravel_id'])): ?>

<div class="container"> 
    <div class="row">
        <div class="col-6">
        <?php foreach ($laravel_watch_singl_video as $laravel_watch): ?>
            <h4 class="float-left">Gledate: <ins><?php echo $laravel_watch; ?></ins> </h4> 
            <a href="play.video.php?laravel_submit"> <button type="submit" class="btn btn-warning btn-sm">Povratak na listu videa Laravel-a </button> </a>
            <video width="860" height="600" controls>
            <source src="<?php echo $laravel_watch; ?>" type="video/mp4">
            </video>
        <?php endforeach ?>
        </div>
    </div>
</div><br>


<?php endif ?>


                   


<?php require "view/partials/footer.php" ?>
