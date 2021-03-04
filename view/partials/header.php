
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Danilo Vesovic">
    <meta name="description" content="Profesionalni kursevi programiranja! Jedno mesto za sve programere.">

<title>Svet programiranja</title>

<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<?php 

if (isset($_SESSION['logged_user'])):?>
  <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
  <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
            <h4 class="text-white">Online skola programiranja</h4>
        </li>
      </ul>
            <a href="kontakt.php" class="nav-link text-black-50"> <img src="koverta.png" alt=""  id="naslov1">   vrmilan88@yahoo.com</a>
            <button class="btn btn-sm btn-success float-sm-right" disabled> Korisnik je : <?php echo $_SESSION['logged_user']->name; ?></button>
            <a href="logout.php"><button class="btn btn-sm btn-outline-danger float-sm-right">Odloguj se</button></a>
  </div>
</nav>
<?php else: ?>
<nav class="navbar navbar-expand-lg navbar-secondary bg-secondary">
  <div class="container">
      <ul class="navbar-nav">
        <li class="nav-item">
            <h4 class="text-white">Online skola programiranja</h4>
        </li>
      </ul>
            <a href="kontakt.php" class="nav-link text-black-50"> <img src="koverta.png" alt=""  id="naslov1">   vrmilan88@yahoo.com</a>
            <a  href="register.php" class="nav-link text-black-50"> Registruj se</a>
            <a href="login.php"><button class="btn btn-sm btn-outline-info">Loguj se</button></a>
  </div>
</nav>
<?php endif ?>

  <div class="container navbar navbar-expand-lg navbar-light">
  
  <div class="container-sm">
  <a class="navbar-brand" href="index.php"><img src="slika-index.png" alt="" width="65" height="35"></a>
  </div>
  
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active float-right" aria-current="page" href="index.php">Pocetna</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="blog.php">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontakt.php">Kontakt</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Kursevi
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li>
            <form action="play.video.php" method="get">
            <button class="dropdown-item" name="php_submit">Master PHP</button>
            </form>
            </li>
            <li>
            <form action="play.video.php" method="get">
            <button class="dropdown-item" name="laravel_submit">Laravel</button>
            </form>
            <!-- <a class="dropdown-item" href="#">Laravel</a> -->
            </li>
            <!-- <li><a class="dropdown-item" href="#">React JS</a></li> -->
          </ul>
        </li>
      </ul>
    </div>
  </div>
