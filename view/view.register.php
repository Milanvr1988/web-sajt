<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="jumbotron">
        <h1 class="text-center" >Registarcija</h>
    </div>
</div>
<div class="container navbar-expend navbar-light">
    <div class="row">
        <a href="index.php"> <img src="slika-nazad1.png" alt=""></a>
    </div><br><br>
    
    <form action="register.php" method="post">

                <?php if($register_user->register): ?>
                <div class="alert alert-success">
                    <p>Uspesno ste se Registrovali. <a href="login.php">Ulogujte se</a></p>
                </div>
                    <?php endif ?>


        <input type="text"  id="registracija" name="name" class="form-control" required>
        <label for="registracija">Unesite Vase ime</label><br><br>
        <input type="text" name="username" id="registracija1" class="form-control" required>
        <label for="registracija1">Unesite Vase Prezime</label><br><br>
        <input type="email" name="email" id="registracija2" class="form-control" required>
        <label for="registracija2">Vas e-mail</label><br><br>
        <input type="password" name="password" id="registracija3" class="form-control" required>
        <label for="registracija3">Vasa lozinka</label><br><br>
        <button type="submit" name="save" class="btn btn-info btn-sm form-control">Save</button>
    </form>
</div>   

</body>
</html>