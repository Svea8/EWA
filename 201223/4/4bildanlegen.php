<form action="4bildanlegen.php" method="post" enctype="multipart/form-data">
    <input type="file" name="bild" accept="image/*">
    <input type="text" id="bname" name="bildname" required>
    <input type="submit" name="button" value="Hochladen"> 
</form>
<?php
    $name=$_POST["bildname"].".jpg";
    move_uploaded_file($_FILES['bild']['tmp_name'],$name);
    echo "<img src=".$name.' width="400px"/>'."</br>";
    echo "Orginalname: ".$_FILES["bild"]["name"]."</br>";
    echo "Größe: ".$_FILES["bild"]["size"]."</br>";
    echo "Typ: ".$_FILES["bild"]["type"]."</br>";
    if($_FILES["bild"]["error"]!=0){
        echo "Fehler beim Hochladen: ".$_FILES["bild"]["error"];
    }
?>

 