<?php
    // karena ada fitur auto konversi manupulasi string dengan " + " tidak direkomendasikan
    
    //dot operator
    $name = "Ari Syafri";
    echo "Nama : " . $name .PHP_EOL; // PHP_EOL adalah end of line seperti tab enter
    echo "Nilai : " . 100 . "\n"; 

    // konversi ke number dan sebaliknya
    $valueString = (string)100;
    var_dump($valueString);

    $valueInt = (int)"100";
    var_dump($valueInt);

    $valueFloat = (float)"100.11";
    var_dump($valueFloat);

    //mengakses karakter
    $name = "ari";
    echo $name[0] . PHP_EOL;
    echo $name[1] . PHP_EOL;
    echo $name[2] . PHP_EOL;
    // echo $name[3] . PHP_EOL; // ini array offset

    // variable parsing
    $name = "ujang";
    echo "Hello $name, Selamat Beraktifitas".PHP_EOL;
    
    // curly Brace
    echo "Hello {$name}s, Selamat Beraktifitas".PHP_EOL;

?>