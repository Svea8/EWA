<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $random1=rand(0, 50);
        $random2=rand(0, 50);
        $random3=rand(0, 50);
        $sum=$random3+$random2+$random1;
        echo("$random1+$random2+$random3=$sum")
    ?>
</body>
</html>