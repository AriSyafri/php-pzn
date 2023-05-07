<?php
    // bukan ternary operator
    $gender = "PRIA";

    $hi = null;
    if ($gender == "PRIA") {
        $hi = "Hi bro";
    } else {
        $hi = "Hi Noona";
    }
    echo $hi . PHP_EOL;

    // dengan ternary operator
    // $gender = "Wanita";
    $hi = $gender == "PRIA" ? "hi bro" : "hi cewe";
    echo $hi . PHP_EOL;
?>