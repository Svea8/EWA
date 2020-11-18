
    <?php 
    /*$personen=array(
        "id" => 1,
        "name" => "Ute",
        "alter" => 31
    );
    $string=json_encode($personen);
    echo($string);*/

    $mysqli = new mysqli('localhost', 'root','', '1111');
    if (mysqli_connect_errno()) {
        echo "Keine Verbindung zur Datenbank möglich: " . mysqli_connect_error();
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