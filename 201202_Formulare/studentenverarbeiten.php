<?php
    $mysqli = new mysqli('localhost', 'root','', '1111');

    $name = $_POST["name"];
    $mnr=$_POST["mnr"];
    $sgang=$_POST["sgang"];
    $module=$_POST["module"];
    $noten=$_POST["noten"];
    
    if (mysqli_connect_errno()) {
        echo "Keine Verbindung zur Datenbank möglich: " . mysqli_connect_error();
    }

    $sql = "INSERT INTO studenten (name, mnr, studiengang) VALUES ('$name', '$mnr', '$sgang')";
    if ($mysqli->query($sql) === TRUE) {
        echo "stud succ";
    } else {
        echo "Error: " . $sql . "<br>" . $mysqli->error;
    }
    $id=$mysqli->insert_id;

    for ($i=0; $i < count($module); $i++) { 
        $sql2= "INSERT INTO noten (modul, note, studid) VALUES ('$module[$i]', '$noten[$i]', '$id')";
        if ($mysqli->query($sql2) === TRUE) {
            echo "noten succ";
        } else {
            echo "Error: " . $sql2 . "<br>" . $mysqli->error;
        }
    }

    $daten = array();
    $abfrage = "SELECT * FROM studenten";
    $ergebnis = $mysqli -> query($abfrage);

    if($ergebnis != false) {
        
        while($row = $ergebnis -> fetch_assoc()) {
            $id = $row["id"];
            $noten=array();

            $notenabfrage="SELECT * FROM noten WHERE studid = " . $id;
            $noergebnis = $mysqli -> query($notenabfrage);
            
            if($noergebnis != false) {
                while($norow = $noergebnis -> fetch_assoc()) {
                    $noten[] = $norow;
                }
                $row["noten"]=$noten;
            }
            $daten[]=$row;
        }
        echo "<br>".json_encode($daten);   
    }
    
    $mysqli -> close();


?>