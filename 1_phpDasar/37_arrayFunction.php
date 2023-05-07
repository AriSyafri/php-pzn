<?php
    $data = [1,2,3,4,5,6,7,8,9,10];

    $mapFunction = fn(int $value) => $value * 10;

    // array_map() -> mengubah semua data array dangan callback
    $dataresult = array_map($mapFunction, $data);
    var_dump($dataresult);

    // rsort() -> mengurutkan array terbalik
    rsort($data);
    var_dump($data);
    
    // sort() -> mengurutkan array

    // array_keys() -> mengambil semua keys milik array
    var_dump(array_keys($data));

    $person = [
        "firstName" => "Ujang",
        "lastName" => "Suaep"
    ];
    var_dump(array_keys($person));

    // array_values() -> mengambil semua values milik array
    var_dump(array_values($person));
    var_dump(array_values($data));

    // shuffle() -> mengubah posisi data di array secara random
    shuffle($data);
    var_dump($data);
?>