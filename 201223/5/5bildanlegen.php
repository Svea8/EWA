<form action="5bildanlegen.php" method="post" enctype="multipart/form-data">
    <input type="file" name="bild" accept="image/*">
    <input type="submit" name="button" value="Hochladen"> 
</form>
<?php
    $name=$_FILES['bild']['name'];
    move_uploaded_file($_FILES['bild']['tmp_name'],$name);
    echo '<img src='.'"'.$name.'"'.' width="400px"/>'."</br>";
?>
 