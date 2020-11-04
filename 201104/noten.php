<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function arrayAnlegen(){
        $array= array(
            "mathe" => 3.7,
            "chinesisch" => 1.3,
            "swe2" => 1.0
        ); 
        return $array;
    }

    function arrayAlsString($a){
        $string=json_encode($a);
        return $string;
    }

    function summeBerechnen($a){
        $sum=0;
        foreach ($a as $note) {
            $sum=$sum + $note;
        }
        return $sum;
    }

    function durchschnittBerechnen($a){
        $lae= count($a);
        $dur=summeBerechnen($a);
        $dur=$dur/$lae;
        return $dur;
    }

    function maximaleZahl($a){
        $max=0;
        $lae= count($a);
        foreach ($a as $note) { 
            if ($note>$max) {
                $max=$note;
            }
        }
        return $max;
    }
    function zahlEnthalten($x,$a){
        $lae= count($a);
        $i=0;
        $enthalten="false";
        foreach ($a as $note) {
            if ($x==$note) {
                $enthalten="true";
            }
        }
        return $enthalten;
    }
    $ha=arrayAnlegen();
    $x=4;
    echo arrayAlsString($ha);
    echo "<br/>Summe ";
    echo summeBerechnen($ha);
    echo "<br/>durchschnitt ";
    echo durchschnittBerechnen($ha);
    echo "<br/>maxzahl ";
    echo maximaleZahl($ha); 
    echo "<br/>Note $x entahlten: ";
    echo zahlEnthalten($x,$ha);  
    ?>
</body>
</html>