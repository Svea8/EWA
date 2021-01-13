<?php 
    session_start();
    $_SESSION['bestellung']=$_GET['bestellung'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><?php 
        echo $_SESSION['anzahl']."</br>".$_SESSION['uhrzeit']."</br>".$_SESSION['bestellung']
        ?></h1>
</body>
</html>