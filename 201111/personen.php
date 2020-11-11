<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $personen=array(
        "id" => 1,
        "name" => "Ute",
        "alter" => 31
    );
    $string=json_encode($personen);
    echo($string);
    ?>
</body>
</html>