<?php 
    $x1 = $_POST["x1"]; 
    $x2 = $_POST["x2"]; 
    $x3 = $_POST["x3"]; 
    $y1 = $_POST["y1"]; 
    $y2 = $_POST["y2"]; 
    $y3 = $_POST["y3"]; 

    $ a = sqrt(pow($ x1 - $ x2, 2) + pow($ y1 - $ y2, 2));
    $ b = sqrt(pow($ x1 - $ x3, 2) + pow($ y1 - $ y3, 2));
    $ c = sqrt(pow($ x2 - $ x3, 2) + pow($ y2 - $ y3, 2));

    $ p = $ a + $ b + $ c;
    $ s = sqrt($ p / 2 * ($ p/ 2 - $ a) * ($ p / 2 - $ b) * ($ p / 2 - $ c));

    echo ("Площадь треугольника равна:: " . $p);
    echo ("<br>Периметр треугольника равен:: " . $s);
?>