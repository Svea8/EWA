<?php
    $mysqli = new mysqli('localhost', 'root','', 'kochbuch_ws2021');

    $rnamew=$_POST["rnameeingabe"];                       
    $kbeschw=$_POST["kbescheingabe"];
    $dauerw=$_POST["dauer"];
    $schwierigw=$_POST["schwer"];
    $kategw=$_POST["sgang"];
    $beschw=$_POST["zubeingabe"];

    $bildnamemitjpg=mktime().$_FILES['bild']['name'];
    
    move_uploaded_file($_FILES['bild']['tmp_name'],"bilder/".$bildnamemitjpg);

    

    if (mysqli_connect_errno()) {
        echo "Keine Verbindung zur Datenbank möglich: " . mysqli_connect_error();
    }

    $sql = "INSERT INTO rezepte (name,kurztext,dauer,schwierig,bild,kategorie,beschreibung) 
    VALUES ('$rnamew', '$kbeschw','$dauerw','$schwierigw','$bildnamemitjpg','$kategw','$beschw')";

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
        $fin=json_encode($daten);
        echo "<h1>neues Rezept</h1><p>Name:".$rnamew."</p><p>Beschreibung:".$kbeschw."</p><p>Dauer:".$dauerw."</p>
        <p>Schwierigkeit:".$schwierigw."</p><p>Zutaten:".$eschw."</p><img src='bilder/".$bildnamemitjpg."' />";
    }
    $mysqli -> close();
?>