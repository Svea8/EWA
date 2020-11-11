<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $studenten= array();
    $noten= array();

    $noten[]=array("modul"=>"Mathe","note"=>3,7);
    $noten[]=array("modul"=>"Me","note"=>3,7);
    
    $studenten[] =array(
        "name"=> "Hans",
        "mn" => 12345,
        "sg" => "DC",
        "noten" => $noten
    );
    $studenten[] =array(
        "name"=> "Hans",
        "mn" => 12345,
        "sg" => "DC",
        "noten" => $noten
    );
    
    echo(json_encode($studenten)); 
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