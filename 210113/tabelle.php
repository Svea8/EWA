<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <h1>Team wählen</h1>
    <form method="POST">
    <input type="text" name="feld1" value="Naomi"><input type="submit" name="but1" action="team.php" value="wählen">
    </form>
    <form method="POST">
    <input type="text" name="feld2" value="Zoe"><input type="submit" name="but2" action="tabelle.php" value="wählen">
    </form>
    <form method="POST">
    <input type="text" name="feld3" value="Svea"><input type="submit" name="but3" action="tabelle.php" value="wählen">
    </form>
    </br>
    <form method="POST">
    <input type="submit" action="team.php" value="weiter">
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
</html>
<?php 
if (!isset($_SESSION['feld'])) {
    $_SESSION['feld']=array();
}
if (isset($_POST["but1"])) {
    $_SESSION['feld'][]=$_POST["feld1"];
    echo "1";
}
if (isset($_POST["but2"])) {
    $_SESSION['feld'][]=$_POST["feld2"];
    echo "2";
}
if (isset($_POST["but3"])) {
    $_SESSION['feld'][]=$_POST["feld3"];
    echo "3";
}
?>