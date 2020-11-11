<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    
    $eintrag = "INSERT INTO personen (id, altersan, name) VALUES (2, 3, 'hi')";
    $ergebnis = $mysqli -> query($eintrag);
    if($ergebnis != false) {
    echo '{"antwort" : "Eintrag war erfolgreich"}';
    }
    else {
    echo '{"antwort" : echo "Error: " .
    mysqli_error($mysqli)}';
    }

    $mysqli -> close();
    ?>
</body>
</html>