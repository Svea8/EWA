<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $random1=rand(-50, 50);
        $random2=rand(-50, 50);
        $random3=rand(-50, 50);

        //Summe
        $sum=$random3+$random2+$random1;

        //größte Zahl
        if($random1>$random2 && $random1>$random3){
            $max=$random1;
        }
        elseif ($random2>$random1 && $random2>$random3){
            $max=$random2;
        }
        else {
            $max=$random3;
        }

        //Betrag Funktion
        function betrag($zahl){
            if ($zahl<0) {
                $zahl=$zahl*-1;
            }
            $betrag=$zahl;
            return $betrag;
        }

        $betrag1=betrag($random1);
        $betrag2=betrag($random2);
        $betrag3=betrag($random3);
        
        //Ausgabe
        echo("$random1+$random2+$random3=$sum </br>");
        echo("Größte Zahl ist $max </br>");
        echo("Betrag von $random1 = $betrag1</br>");
        echo("Betrag von $random2 = $betrag2</br>");
        echo("Betrag von $random3 = $betrag3</br>");
    ?>
</body>
</html>