<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $mysqli = new mysqli('localhost', 'root','', '1111');
    if (mysqli_connect_errno()) {
        echo "Keine Verbindung zur Datenbank möglich: " . mysqli_connect_error();
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
</body>
</html>