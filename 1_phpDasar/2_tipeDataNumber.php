<?php
    // tipe data number
    // int bilangan bulat
    // float bilangan pecahan

    echo "Tipe data integer : ";

    echo "Decimal : ";
    var_dump(1234);

    echo "Octal : ";
    var_dump(0123);

    echo "Hexadecimal : ";
    var_dump(0x1A);

    echo "Binary : ";
    var_dump(0b1111111);

    // underscore diabaikan
    echo "Underscore di number : ";
    var_dump(1_234_567);

    echo "Tipe data float : ";

    echo "Floating Point : ";
    var_dump(1.234);

    echo "Floating Point dengan E notation plus (1.2 x 1000) : ";
    var_dump(1.2e3);

    echo "Floating Point dengan E notation minus (7 x 0.001) : ";
    var_dump(7e-3);

    echo "Undescore di Floating Point : ";
    var_dump(1_234.567);

    echo "Integer Overflow : ";
    // melebihi kapasitas 64bit laptop
    var_dump(123456789123456789123456789123456789);
?>
