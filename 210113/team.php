<?php 
    session_start();
    foreach($_SESSION['feld'] as $value){
        echo $value;
    }
?>