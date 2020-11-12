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
    $abfrage = "SELECT * FROM studenten";
    $notenabfrage="SELECT * FROM noten";
    $ergebnis = $mysqli -> query($abfrage);
    $noergebnis = $mysqli -> query($notenabfrage);
    if($ergebnis != false) {
        $daten = array();
        while($row = $ergebnis -> fetch_assoc()) {
            $daten[] = $row;
        }
        echo (json_encode($daten));
    }
    if($noergebnis != false) {
        $nodaten = array();
        while($norow = $noergebnis -> fetch_assoc()) {
            $nodaten[] = $norow;
        }
        echo (json_encode($nodaten));
    }
    $mysqli -> close();
    /* Ansatz aus Folien
    <?php
    $student1 = array();
    $student1["name"] = "Ute";
    $student1["alter"] = 31;
    $student2 = array();
    $student2["name"] = "Hans";
    $student2["alter"] = 28;
    $studenten = array($student1, $student2);
    ?>  */
    ?>
</body>
</html>