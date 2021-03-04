
<?php require "partials/header.php"; ?>

<div class="jumbotron bg-light ">
<h1 class="text-center font-weight-bold ">Kontakt</h1>
</div>
<div class="container">
    <div class="row">
        <h1 class="font-weight-bold font-italic">Stupimo u kontakt</h1>
    </div><br><br>
    <div class="row">
        <p>Ako imate bilo kakva pitanja, sugestije ili pak da prijavite neki nedostatakbr
         na sajtu, slobodno me kontaktirajte.</p>
    </div><br><br>
    <?php if ($contact->kontakt_message):?>
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">Uspesno ste poslali poruku</h4>
                <p>Javicemo Vam se u sto kracem roku</p>
                <hr>
                <p class="mb-0">Hvala Vam na poverenju</p>
            </div>
    <?php endif ?>

    <form action="kontakt.php" method="post">
        <input type="text" name="ime" placeholder="Unesite Vase Ime" class="form-control" required><br>
        <input type="email" name="email" placeholder="E-mail" class="form-control" required><br>
        <textarea name="poruka" cols="80" rows="7" placeholder="Unesite poruku" required></textarea><br><br>
        <button type="submit" name="save" class="btn btn-success btn-lg"> Posalji </button>
    </form>
</div><br>
 

<?php require "partials/footer.php"; ?>
