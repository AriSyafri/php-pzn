<?php 
    // string function 
    // function                                    ket
    // str_contains($string, $contains): bool      mengecek apakah $string mengandung $contains
    // str_starts_with($string, $value): bool     mengecek apakah $string memiliki awal $value
    // str_ends_with($string, $value): bool        mengecek apakah $string memiliki akhir $value 

    var_dump(str_contains("Ari Syafri", "Ari"));
    var_dump(str_contains("Ari Syafri", "Syafri"));
    var_dump(str_contains("Ari Syafri", "Asep"));

    var_dump(str_starts_with("Ari Syafri", "Ari"));
    var_dump(str_starts_with("Ari Syafri", "Syafri"));
    var_dump(str_starts_with("Ari Syafri", "Asep"));

    var_dump(str_ends_with("Ari Syafri", "Ari"));
    var_dump(str_ends_with("Ari Syafri", "Syafri"));
    var_dump(str_ends_with("Ari Syafri", "Asep"));
?>