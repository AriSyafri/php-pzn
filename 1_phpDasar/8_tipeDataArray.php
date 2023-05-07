<?php
    // array di java unik bisa dalam 1 array menggunakan beberapa jenis tipe data

    // membuat array cara 1
    $values = array(1,2,3,4,"tes");
    var_dump($values);

    // membuat array cara 2
    $names = ["Ari","Syafri","IF2",4];
    var_dump($names);

    // operasi array
    $names[0] = "Ucup"; // mengubah array
    var_dump($names);

    unset($names[2]); // menghapus array dan indeks juga
    var_dump($names);

    $names[] = "Udin"; // menambah array di akhir
    var_dump($names);

    var_dump(count($names)); // menghitung array 

    // array sebagai map/asosiatif
    $ari = array(
        "id" => "ari",
        "nama" => "Ari Sjafrie",
        "umur" => 20
    );

    $budi = [
        "id" => "budi",
        "nama" => "Budi Sudarsono",
        "umur" => 20
    ];

    var_dump($ari);
    var_dump($budi);
    var_dump($ari["nama"]);

    // array di dalam array
    $smartphone = array(
        "id" => "A012",
        "nama" => "Advan S3A",
        "garansi" => 2,
        "warna" => [
            "depan" => "putih",
            "belakang" => "hitam"
        ]
    );
    var_dump($smartphone);
    var_dump($smartphone["id"]);
    var_dump($smartphone["warna"]["depan"]);

?>