<h1>yes b</h1>

<?php
    
    $rnamew=$_GET["rnameeingabe"];                       
    $kbeschw=$_GET["kbescheingabe"];
    $dauerw=$_GET["dauer"];
    $schwierigw=$_GET["schwer"];
    $kategw=$_GET["sgang"];
    $beschw=$_GET["zubeingabe"];
    $mysqli = new mysqli('localhost', 'root','', 'kochbuch_ws2021');

    if (mysqli_connect_errno()) {
        echo "Keine Verbindung zur Datenbank möglich: " . mysqli_connect_error();
    }

    $sql = "INSERT INTO rezepte (name,kurztext,dauer,schwierig,kategorie,beschreibung) 
    VALUES ('$rnamew', '$kbeschw','$dauerw','$schwierigw','$kategw','$beschw')";

    if ($mysqli->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }

    $abfrage = "SELECT * FROM rezepte";
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