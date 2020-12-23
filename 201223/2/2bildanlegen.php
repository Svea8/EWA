<form action="2bildanlegen.php" method="post" enctype="multipart/form-data">
    <input type="file" name="bild" accept="image/*">
    <input type="submit" name="button" value="Hochladen"> 
</form>
<?php
    move_uploaded_file($_FILES['bild']['tmp_name'],"bild.jpg");
?>

 <img src="bild.jpg" width="400px">