<?php 
$katet = $_POST["katet"];
$katet2 = $_POST["katet2"];
if($katet > 0 && $katet > -1 && $katet2 > 0 && $katet2 > -1){
    $res2 = ($katet + $katet2) / 2;
    echo ("Площадь треугольника равна: " . $res2);

    $gipo = sqrt($katet * $katet + $katet2 * $katet2);
    $per = $katet + $katet2 + $gipo;

    echo ("<br>Периметр треугольника равен: " . $per);
}
?>