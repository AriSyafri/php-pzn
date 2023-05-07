<?php
    // factorial loop
    function factorialLoop(int $value): int {
        $total = 1;
        for ($i = 1; $i <= $value; $i++) {
            $total *= $i;
        }
        return $total;
    }

    var_dump(factorialLoop(5));

    // factorial recursive
    function factorialRec(int $value): int {
        if($value == 1){
            return 1;
        } else {
            return $value * factorialRec($value - 1);
        }
    }

    var_dump(factorialRec(5));

?>