<?php 
    session_start();
    echo "<h1> Ihr Team:</h1>";
    foreach($_SESSION['id'] as $value){
        echo $value."</br>";
    }
?>
<form method="POST" action="tabelle.php">
    <input type="submit" value="weiter">
</form>
<?php 
    $_SESSION['id']=array();
?>