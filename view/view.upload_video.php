<?php require  ('view/partials/header.php'); ?>

<?php 

if ($upload_video->upload) {
    echo "<h1 class='font-weight-bold' >Uploaded video</h1>";
}
?>


<h1>Upload video below </h1><hr>

<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="file"><br>
<input type="text" name="brand" placeholder="name Brand"><br>
<input type="submit"  name="upload" value="UPLOAD">

</form>


<?php require  ('view/partials/footer.php'); ?>
