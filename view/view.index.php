<?php require "view/partials/header.php"; ?>

<!-- <?php  $result = $query->view_message(); ?>

<?php foreach ($result as $re): ?>
<ul> <?php echo $re->name; ?> </ul>
<?php endforeach ?> -->

<!-- <h1><a href="upload_video.php">Upload Video</a></h1>    -->


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="naslovna1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Dobrodosli</h1>
        <h3> <strong>Dobrodosli</strong> na platformu gde se postaje <strong class="text-warning">PROGRAMER</strong></h3><br>
        <a href="video_education.php"> <button type="submit" class="btn btn-info btn-sm"> Svi Kursevi </button> </a><br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="naslovna2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="text-secondary"> <strong>Zaroni u svet </strong> <strong class="text-warning">PHP</strong> <strong>Programiranja</strong>  </h1>
        <h3 class="text-secondary">Najpoznatiji <strong class="text-warning">Backend</strong> <strong>PHP</strong> programski jezik   </h3><br>
        <a href="video_education.php"> <button type="submit" class="btn btn-info btn-sm"> Svi Kursevi </button> </a><br>
      </div>
    </div>
    <div class="carousel-item">
      <img src="naslovna4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Moderne tehnologije</h1>
        <h3>Razvoj Web Stranica</h3><br>
        <a href="video_education.php"> <button type="submit" class="btn btn-info btn-sm"> Svi Kursevi </button> </a><br>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden fw-bold"> <strong class="text-dark">Previous</strong> </span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"  data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"> <strong class="text-dark">Next</strong> </span>
  </button>
</div>



<?php require "view/partials/footer.php"; ?>

