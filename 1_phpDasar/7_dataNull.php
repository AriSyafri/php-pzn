<?php
    // nilai null merepresentasikan sebuah variable tanpa nilai
    // null case insensitive

    $name = "Ari";
    $name = null;

    $age = null;

    echo "Name : ";
    echo $name;
    echo "\n";

    echo "Age : ";
    echo $age;
    echo "\n";

    // mengecek apakah data null atau tidak
    echo "Is name null? : ";
    var_dump(is_null($name));
    echo "\n";

    // menghapus variable
    $contoh = "ari";
    unset($contoh);
    // variable undefine
    // echo $contoh;

    // mengecek variabel ada tidaknya 
    var_dump(isset($contoh));
?>