<?php

// references adalah mengakses variabel dengan nama variabel berbeda
    // assign by reference di variabel
    $name = "Ari";

    $otherName = &$name;
    $otherName = "Budi";

    echo $name . PHP_EOL;


    // pass by reference (mengirim data ke function dengan reference ke variabel asli)
    function increment(int &$value) {
        $value++;
    }

    $counter = 1;
    increment($counter);

    echo $counter . PHP_EOL;

    // returning reference
    function &getValue(){
        static $value = 100;
        return $value;
    }

    $a = &getValue();
    $a = 200;

    $b = &getValue();
    echo $b . PHP_EOL;



