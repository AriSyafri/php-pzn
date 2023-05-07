<?php
    $nilai = 60;
    $absen = 50;

    $nilai =  "Nilai anda : ";

    if ($nilai >= 80 && $absen >= 80) {
        echo $nilai . "A" . PHP_EOL;
    } else if ($nilai >= 70 && $absen >= 70) {
        echo $nilai . "B" . PHP_EOL;
    } else if ($nilai >= 60 && $absen >= 60) {
        echo $nilai . "C" . PHP_EOL;
    } else if ($nilai >= 50 && $absen >= 40) {
        echo $nilai . "D" . PHP_EOL;
    } else {
        echo $nilai. "E" . PHP_EOL;
    }

    // syntax alternatif if
    if ($nilai >= 80 && $absen >= 80) :
        echo $nilai . "A" . PHP_EOL;
    elseif ($nilai >= 70 && $absen >= 70) :
        echo $nilai . "B" . PHP_EOL;
    elseif ($nilai >= 60 && $absen >= 60) :
        echo $nilai . "C" . PHP_EOL;
    elseif ($nilai >= 50 && $absen >= 40) :
        echo $nilai . "D" . PHP_EOL;
    else :
        echo $nilai. "E" . PHP_EOL;
    endif;
    ?>