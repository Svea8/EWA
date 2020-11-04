<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function arrayAnlegen($laenge){
        $array= array();
        for ($i=0; $i<$laenge; $i++){
            $array[]=rand(-10, 10);
        }
        return $array;
    }

    function arrayAlsString($a){
        $string=json_encode($a);
        return $string;
    }

    function summeBerechnen($a){
        $sum=0;
        $lae= count($a);
        for($i=0; $i<$lae; $i++){
            $sum=$sum+$a[$i];
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
        $max=-11;
        $lae= count($a);
        for($i=0; $i<$lae; $i++){
            if ($a[$i]>$max) {
                $max=$a[$i];
            }
        }
        return $max;
    }
    function zahlEnthalten($x,$a){
        $lae= count($a);
        $i=0;
        $enthalten="false";
        while($enthalten=="false" && $i<$lae){
            if($x==$a[$i]){
                $enthalten="true";
                
            }
            $i++;
        }
        return $enthalten;
    }
    $ha=arrayAnlegen(10);
    echo arrayAlsString($ha);
    echo summeBerechnen($ha);
    echo "<br/>durchschnitt ";
    echo durchschnittBerechnen($ha);
    echo "<br/>maxzahl ";
    echo maximaleZahl($ha);
    echo "<br/>entahlten ";
    echo zahlEnthalten(5,$ha);
    ?>
</body>
</html>