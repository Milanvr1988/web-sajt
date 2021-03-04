<?php require "view/partials/header.php"; ?><br><br>


<?php foreach ($show_video as $show): ?>

<div class="container">
  <div class="row">
    <div class="col">

    <div class="card" style="width: 18rem;">
        <img src="php.jpg" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title font-weight-bold"><?php echo $show." "."Semestar 1"; ?></h5>
            <p class="card-text"> PHP Semestar 1 je namenjen osobama koji zele da nauce PHP od njegove pocetne tacke do Mastera.</p>
            <form action="play.video.php" method="get">
            <button  class="btn btn-primary" name="php_submit"> Play Videos <br>  <strong class="text-warning"><?php echo $show;?></strong></button>
            </form>
        </div>
    </div>

    </div>
  </div>
</div><br><br>

<?php endforeach ?>

<?php foreach ($laravel_show_video as $laravel_show): ?>

<div class="container">
  <div class="row">
    <div class="col">

    <div class="card" style="width: 18rem;">
        <img src="laravel.webp" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title font-weight-bold"><?php echo $laravel_show; ?></h5>
            <p class="card-text"> Zaronite u svet <ins> najpoznatijeg </ins> Framework-a <strong>LARAVEL.</strong> </p>
            <form action="play.video.php" method="get">
            <button  class="btn btn-primary" name="laravel_submit"> Play Videos <br> <strong class="text-warning"><?php echo $laravel_show;?></strong></button>
            </form>
        </div>
    </div>

    </div>
  </div>
</div><br><br>

<?php endforeach ?>




<?php require "view/partials/footer.php"; ?>
