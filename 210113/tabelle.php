<?php session_start() ?>
<?php 
	$members = array();
	
	$members[0] = array();
	$members[0][0] = 1;
	$members[0][1] = "Ute";
	
	$members[1] = array();
	$members[1][0] = 2;
	$members[1][1] = "Hans";
	
	$members[2] = array();
	$members[2][0] = 3;
	$members[2][1] = "Peter";
?>
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
    <?php 
    for ($i=0; $i < count($members) ; $i++) { 
    ?>
    <form method="POST" action="tabelle.php">
        <input type="hidden" name="id" value="<?php echo $members[$i][0];?>">
        <inline><?php echo $members[$i][1];?></inline>
        <input type="submit" name="but<?php echo $i+1;?>" value="wählen">
    </form>
    <?php
    }
    ?>
    </br>
    <form method="POST" action="team.php">
    <input type="submit" value="weiter">
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
if (!isset($_SESSION['id'])) {
    $_SESSION['id']=array();
}
if (isset($_POST["but1"])&&!in_array($members[0][1], $_SESSION['id'])) {
    $_SESSION['id'][]=$members[0][1];
}
if (isset($_POST["but2"])&&!in_array($members[1][1], $_SESSION['id'])) {
    $_SESSION['id'][]=$members[1][1];
}
if (isset($_POST["but3"])&&!in_array($members[2][1], $_SESSION['id'])) {
    $_SESSION['id'][]=$members[2][1];
}
//echo $_SESSION['id'][0].$_SESSION['id'][1].$_SESSION['id'][2];
?>