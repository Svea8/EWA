<?php 
    $mysqli = new mysqli('localhost', 'root','', 'kochbuch_ws2021');
    if (mysqli_connect_errno()) {
        echo "Keine Verbindung zur Datenbank möglich: " . mysqli_connect_error();
    }
    $abfrage = "SELECT * FROM zutaten";
    $ergebnis = $mysqli -> query($abfrage);
    if($ergebnis != false) {
        $daten = array();
        while($row = $ergebnis -> fetch_assoc()) {
            $daten[] = $row;
        }
        echo (json_encode($daten));
    }
    $mysqli -> close();
?>  