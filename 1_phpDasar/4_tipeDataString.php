<?php
    // single quote (kutip satu)
    echo 'Nama : ';
    echo 'Ari Syafri';

    // double quote (kutip 2)
    // perbedaan jika double quote dapat menggunakan escape sequence
    echo "\n";
    echo "Nama : ";
    echo "Eko\t Kurniawan\t Khannedy\n";
    echo "Nama \"Ari\"";
    echo "\n";
    
    // multiline string
    // dengan Heredoc : Heredoc adalah fitur untuk membuat string yang panjang, sehingga kita tidak perlu manual melakukan enter, tab danlain secara manual
    echo <<<ARI
    ini adalah string panjang
    tanpa menggunakan "enter"
    atau "tab"
    ARI;
    echo "\n";

    // nowdoc
    // ini bagian single quote dari heredoc ini gabisa parsing
    echo <<<'ARI'
    ini adalah string panjang
    tanpa menggunakan "enter"
    atau "tab"
    ARI;

?>