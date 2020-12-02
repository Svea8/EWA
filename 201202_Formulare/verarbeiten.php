<?php

    $name = $_GET["vorname"];
    $alter=$_GET["alter"];

    $mysqli = new mysqli('localhost', 'root','', '1111');
    if (mysqli_connect_errno()) {
        echo "Keine Verbindung zur Datenbank möglich: " . mysqli_connect_error();
    }
    $sql = "INSERT INTO personen (altersan,name)
VALUES ('$alter', '$name')";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $mysqli->error;
}

    $abfrage = "SELECT * FROM personen";
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