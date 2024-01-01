<?php 
    $value = "B";
    $result = "";

    switch ($value) {
        case "A":
        case "B":
        case "C":
            $result = "Anda lulus";
            break;
        case "D":
            $result = "Anda tidak lulus";
            break;
        case "E":
            $result = "Mungkin anda salah jurusan";
            break;
        default:
            $result = "Nilai apa itu ?";
    }

    echo $result . PHP_EOL;

    $result = match ($value){
        "A", "B", "C" => "anda Lulus",
        "D" => "Anda tidak lulus", 
        "E" => "Mungkin anda salah jurusan",
        default => "Nilai apa itu ?"
    };

    echo $result . PHP_EOL;

    $value = 82;
    $result = match(true){
        $value > 80 => "A",
        $value > 70 => "B",
        $value > 60 => "C",
        $value > 50 => "D",
        default => "E"
    };

    echo $result . PHP_EOL;

    // match expression dengan kondisi
    $name = "Mrs. Eko";

    $result = match (true) {
        str_contains($name, "Mr.") => "Hello Sir",
        str_contains($name, "Mrs.") => "Hello Mam",
        default => "Hello" 
    };

    echo $result . PHP_EOL;


?>