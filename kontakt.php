<?php require "bootstrap.php"; ?>

<?php 

if (isset($_POST['save'])) {
    $contact->contact_me();
}
?>

<?php require "view/view.kontakt.php"; ?>