<?php 
    session_start();
    $_SESSION['anzahl']=$_GET['anzahl'];
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
        echo $_SESSION['anzahl'];
        ?></h1>
    <form method="GET" action="ende.php">
    <label for="uhrzeit">Uhrzeit</label>
    <input type="text" name="uhrzeit">
    <input type="submit" name="weiter" value="weiter">
    </form>
</body>
</html>