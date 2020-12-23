<?php
    move_uploaded_file($_FILES['bild']['tmp_name'],"bild.jpg");
?>

<img src="bild.jpg"/>