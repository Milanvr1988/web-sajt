
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
        <h1 class="text-center" >Prijava</h>
    </div>
</div>
<div class="container navbar-expend navbar-light">
    <div class="row">
        <a href="index.php"> <img src="slika-nazad2.png" alt=""></a>
    </div><br><br>
    
    <form action="login.php" method="post">
        <input type="email" name="login_email" id="login" class="form-control" required>
        <label for="login">
        <?php if (!$login_user->login):?>
        Vas E-mail
        <?php elseif ($login_user->login):?>
            <div class="alert alert-danger" role="alert">
            <p>Pogresan E-mail ili password. Pokusajte ponovo</p> 
        </div>
        <?php endif ?>
        </label><br><br>
        <input type="password" name="login_password" id="login1" class="form-control" required>
        <label for="login1">Vasa lozinka</label><br><br>
        <button type="submit" name="login_save" class="btn btn-info btn-sm form-control">Prijavi se</button>
    </form>
</div>   

</body>
</html>