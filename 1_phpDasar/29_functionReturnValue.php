<?php 
    // // function return value 1
    // function sum(int $first, int $second) {
    //     $total = $first + $second;
    //     return $total;
    // }

    // $result = sum(10,10);
    // var_dump($result);

    // $result = sum(20,10);
    // var_dump($result);

    // $result = sum(10,30);
    // var_dump($result);

    // // function return value 2
    // function getFinalValue(int $value) {
    //     if ($value >= 80) {
    //         return "A";
    //     } else if ($value >= 70) {
    //         return "B";
    //     } else if ($value >= 60) {
    //         return "C";
    //     } else if ($value >= 50) {
    //         return "D";
    //     } else {
    //         return "E";
    //     }

    //     echo "ups";
    // }

    // function return type declaration
    function sum(int $first, int $second) : int {
        $total = $first + $second;
        return $total;
    }

    $result = sum(10,10);
    var_dump($result);

    $result = sum(20,10);
    var_dump($result);

    $result = sum(10,30);
    var_dump($result);

    // function return type declaration
    function getFinalValue(int $value) : string {
        if ($value >= 80) {
            return "A";
        } else if ($value >= 70) {
            return "B";
        } else if ($value >= 60) {
            return "C";
        } else if ($value >= 50) {
            return "D";
        } else {
            return "E";
        }

        echo "ups";
    }

    $result = getFinalValue(70);
    echo "nilainya : $result" . PHP_EOL;
    $result = getFinalValue(60);
    var_dump($result);
    $result = getFinalValue(100);
    var_dump($result);