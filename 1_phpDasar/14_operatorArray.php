<?php

    // operator array
    // $a + $b -> union -> menggabungkan array $a dan $b

    $first = [
        "firstName" => "Ari"
    ];

    $last = [
        "lastName" => "Syafri"
    ];
    $full = $first + $last;
    var_dump($full);

    $a = [
        "firstName" => "Ari",
        "lastName" => "Syafri"
    ];

    $b = [
        "lastName" => "Syafri",
        "firstName" => "Ari"
    ];

    // $a == $b -> equality -> true jika $a dan $b memiliki key-value sama
    var_dump($a == $b);
    // $a === $b -> identity -> true jika $a dan $b memiliki key-value sama dan posisi sama
    var_dump($a === $b);
    // $a != $b -> inequality -> true jika $a dan $b tidak sama
    var_dump($a != $b);
    // $a <> $b -> inequality -> true jika $a dan $b tidak sama
    var_dump($a <> $b);
    // $a !== $b -> nonidentity -> true jika $a dan $b tidak identik
    var_dump($a !== $b);


?>