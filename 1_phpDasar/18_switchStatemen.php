<?php
    $nilai =  "B";
    switch ($nilai) {
        case "A":
            echo "Anda lulus dengan sangat baik " . PHP_EOL;
            break;
        case "B":
        case "C":
            echo "Ada lulus" . PHP_EOL;
            break;
        case "D":
            echo  "Anda tidak lulus " . PHP_EOL;
            break;
        default:
            echo "Mungkin anda salah Jurusan" . PHP_EOL;
    }

    // bentuk alternatif
    switch ($nilai) :
        case "A":
            echo "Anda lulus dengan sangat baik " . PHP_EOL;
            break;
        case "B":
        case "C":
            echo "Ada lulus" . PHP_EOL;
            break;
        case "D":
            echo  "Anda tidak lulus " . PHP_EOL;
            break;
        default:
            echo "Mungkin anda salah Jurusan" . PHP_EOL;
    endswitch;

?>