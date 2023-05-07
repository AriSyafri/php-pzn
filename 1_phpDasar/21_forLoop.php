<?php

    // $counter = 1;

    // for( ; $counter <= 10 ; ) {
    //     echo "ini adalah for Loop ke-$counter" . PHP_EOL;
    //     $counter++;
    // }

    // pengulangan dengan init statement
    // for($counter = 1 ; $counter <= 10; ) {
    //     echo "ini adalah for Loop ke-$counter" . PHP_EOL;
    //     $counter++;
    // }

    // pengulangan dengan post statement
    for($counter = 10 ; $counter >= 1; $counter-- ) {
        echo "ini adalah for Loop ke-$counter" . PHP_EOL;
    }

    // syntax alternative forloop
    for($counter = 1; $counter <= 10; $counter++) :
        echo "hello for loop -$counter". PHP_EOL;
    endfor;
?>