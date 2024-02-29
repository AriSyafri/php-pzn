<?php
    $host = "localhost";
    $port = 3306;
    $database = "belajar_php_database";
    $username = "root";
    $password = "";

    try {
        // menggunakan object PDO
        $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
        echo "Sukses terkoneksi ke database mysql" . PHP_EOL;

        // menutup koneksi 
        $connection = null;
    } catch (PDOException $exception) {
        echo "Error terkoneksi ke database : " . $exception->getMessage() . PHP_EOL;
    }




?>