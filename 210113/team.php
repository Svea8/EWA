<?php 
    session_start();

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

    echo "<h1> Ihr Team:</h1>";
    foreach($_SESSION['id'] as $value){
        echo $members[$value-1][1]."</br>";
    }
?>
<form method="POST" action="tabelle.php">
    <input type="submit" value="weiter">
</form>
<?php 
    $_SESSION['id']=array();
?>