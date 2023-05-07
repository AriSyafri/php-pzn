<?php
    // join() / implode() -> menggabungkan array menjadi string 
    var_dump(join(",",[10,11,12,13,14]));

    // explode() -> memecah string menjadi array
    var_dump(explode(" ", "Ari Syafri"));

    // strtolower -> mengubah string menjadi lowercase
    var_dump(strtoupper("Ari Syafri"));

    // strtoupper() -> mengubah string menjadi uppercase
    var_dump(strtolower("Ari Syafri"));

    // substr() -> mengambil sebagian string
    var_dump(substr("Ujang Asep Goyobod", 0, 5));

    // trim() -> menghapus whitespace di depan dan belakang string
    var_dump(trim("            tes     "));
?>