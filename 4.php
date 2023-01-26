<?php 

    $num1 = $_POST["num1"];

    $ n1 = $ num1 % 10;
    $ n2 = $ num1 / 10 % 10;
    $ n3 = $ num1 / 100 % 10;
    $ n4 = $ num1 / 1000 % 10;

    echo ($ n1 * $ n2 * $ n3 * $ n4);
?>