<?php
    /*
    is_string() -> apakah tipe data string
    is_bool() -> apakah tipe data boolean
    is_int() -> apakah tipe data number integer
    is_float() -> apakah tipe data number floating point
    is_array() -> apakah tipe data array
    is_callable() -> apakah tipe data callable
    */

    // $data = "sample";
    $data = 12.2;

    var_dump(is_bool($data));
    var_dump(is_int($data));
    var_dump(is_float($data));
    var_dump(is_array($data));
    var_dump(is_string($data));
?>