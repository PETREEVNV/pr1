!<?php 
    $radius = $_POST["radius"];

    if($radius > 0 && $radius > -1){
        $res = pi() * pow($radius, 2);
        echo ("Площадь круга равна: " . $res);
    }    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: yellow;
        }
    </style>
</head>
<body> 
    <p>Щелкните по <a href = "#index.htm">Здесь</a>, чтобы увидеть персональное приветсвтие</p>
</body>
</html>