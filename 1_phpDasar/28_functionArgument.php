<?php

    // parameter atau argument
    function sayHello($name){
        echo "hello $name" . PHP_EOL;
    }

    sayHello("Ari");
    sayHello("Ucup");

    function sayHello2($firstName,$lastName){
        echo "hello $firstName with $lastName" . PHP_EOL;
    }

    sayHello2("Ari","Syafri");

    // default argument value
    function sayHello3($name = "Anonymous") {
        echo "Hello $name" . PHP_EOL;
    }

    sayHello3();
    sayHello3("Ujang");
    
    // default argument/parameter jika lebih dari 2 dan default argument default ada di awal maka kurang berguna
    function sayHello4($name, $lastName = "") {
        echo "Hello $name $lastName" . PHP_EOL;
    }

    sayHello4("Ewing");
    sayHello4("Ewing", "Junaedi");
    sayHello4("Ujang", "Agus");


    // type declaration 
    function sum(int $first, int $last) {
        $total = $first + $last;
        echo "Total $first + $last = $total" . PHP_EOL;
    }

    sum("100", "100");
    sum(100,100);
    sum(true, false);
    // sum ([],[]);

    // penghitungan dengan array
    function sumAll(array $values){
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }
        echo "total ". implode(",", $values) . " = $total" . PHP_EOL;
    }
    
    sumAll([1,2,3,5]);

    // penghitungan dengan 
    // variable-length argument
    function sumAll2(...$values){
        $total = 0;
        foreach ($values as $value) {
            $total += $value;
        }
        echo "total ". implode(",", $values) . " = $total" . PHP_EOL;
    }
    
    sumAll2(1,2,3,5);

    // jika terlanjur membuat array
    $nilai = [1,2,3,4,5];
    sumAll2(...$nilai);
    
?>