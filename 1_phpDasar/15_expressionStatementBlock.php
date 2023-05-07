<?php
    // ekspression secara sederhana adalah kode yang bernilai / value
    // contoh :
    $a = 5; // 5 ekspression
    $b = $a; // $a adalah eksperssion

    // statement adalah kalimat lengkap dan biasanya diakhiri titik koma (;)
    // contoh
    $name = "Ari Syafri";
    echo $name;
    $date = new DateTime();

    // block adalah kumpulan statement yang terdiri dari nol atau lebih statement
    // block diawali kurung kurawal{}
    // contoh
    function runApp($name) {
        echo "start Program".PHP_EOL;
        echo "Hello $name".PHP_EOL;
        echo "End Program".PHP_EOL;
    }
?>