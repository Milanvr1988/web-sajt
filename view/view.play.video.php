<?php


require "view/partials/header.php"; ?><br>
                            
                            
<?php if(isset($_SESSION['logged_user'])): ?>


<div class="container">
    <div class="col float-none">
        <a href="video_education.php"> <button type="submit" class="btn btn-warning btn-sm float-none">Svi kursevi </button> </a>
    </div>
</div><br><br>

<?php if(isset($_GET['php_submit'])): ?>

<?php foreach ($show_video as $show): ?>

<div class="container">
    <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
        <img src="php.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"> <ins><?php echo $show->name; ?></ins> </h5>
            <p class="card-text"> PHP Semestar 1 je namenjen osobama koji zele da nauce PHP od njegove pocetne tacke do Mastera.</p>
            <a href="watch.video.php?id=<?php echo $show->id; ?>" class="btn btn-primary"> Play Video <br> <strong class="text-warning"><?php echo $show->name;?></strong> </a>
        </div>
    </div>
    </div>
    </div>
</div><br>

<?php endforeach ?>

<?php elseif(isset($_GET['laravel_submit'])): ?>

<?php foreach ($laravel_show_video as $laravel_show): ?>

<div class="container">
    <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
        <img src="laravel.webp" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"> <ins><?php echo $laravel_show->name; ?></ins> </h5>
            <p class="card-text"> Zaronite u svet <ins> najpoznatijeg </ins> Framework-a <strong>LARAVEL.</strong></p>
            <a href="watch.video.php?laravel_id=<?php echo $laravel_show->id; ?>" class="btn btn-primary"> Play Video <br> <strong class="text-warning"><?php echo $laravel_show->name;?></strong> </a>
        </div>
    </div>
    </div>
    </div>
</div><br>

<?php endforeach ?>


<?php endif ?>


<?php else: ?>
<div class="container">
    <div class="alert alert-danger">
    <h1>Morate se ulogovati da bi pratili kurseve</h1><br>
    Idite na stranicu "Loguj se"<br>
    ili kliknite ovde <a href="login.php">Uloguj se</a>
 
    </div>
</div>                                
<?php endif ?>

<?php require "view/partials/footer.php"; ?>
