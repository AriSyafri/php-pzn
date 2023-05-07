<?php
    // operator penugasan aritmatika
    $a = 10;
    $b = 2;
    $c = 10;
    $d = 2;

    $value = $a+=$b;
    var_dump($value);

    $value2 = $c-=$d;
    var_dump($value2);

    $total = 0;

    $fruit = 10000;
    $chicken = 35000;
    $orangejuice = 1000;

    //  $total = $total + $variable
    $total += $fruit;
    $total += $chicken;
    $total += $orangejuice;
    var_dump($total);

?>