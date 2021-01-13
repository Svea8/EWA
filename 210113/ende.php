<?php 
    session_start();
    $_SESSION['uhrzeit']=$_GET['uhrzeit'];
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
        echo $_SESSION['anzahl']."</br>".$_SESSION['uhrzeit']
        ?></h1>
    <form method="GET" action="ende2.php">
    <label for="bestellung">Bestellung</label>
    <input type="text" name="bestellung">
    <input type="submit" name="weiter" value="weiter">
    </form>
</body>
</html>
