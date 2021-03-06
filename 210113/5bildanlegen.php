<?php session_start()?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Kochbuch</title>
</head>

<body>
<form action="5bildanlegen.php" method="post" enctype="multipart/form-data">
    <input type="file" name="bild" accept="image/*">
    <input type="submit" name="button" value="Hochladen"> 
    <input type="submit" name="del" value="Seite leeren">
</form>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
</body>
<?php
if (isset($_POST['del'])) {
    $_SESSION['bild']=array();
}
if (isset($_POST['button'])) {
    $dname=$_FILES['bild']['name'];
    move_uploaded_file($_FILES['bild']['tmp_name'],"bilder/".$dname);

    if (!isset($_SESSION['bild'])) {
        $_SESSION['bild']=array();
    }
    $_SESSION['bild'][]=$dname;
    foreach ($_SESSION['bild'] as $bild) { ?>
        <img src="bilder/<?php echo $bild?>" width="30%"/>
        <?php
    }
}
?>
 