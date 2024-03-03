<?php 
    require_once __DIR__ . "/GetConnection.php";

    $connection = getConnection();

    $username = "admin";
    $password = "admin";

    // ketika dengan prepare maka menggunakan parameter :namaParameter bukan kutip ('') lagi 
    $sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
    $statement = $connection->prepare($sql);
    $statement->bindParam("username", $username);
    $statement->bindParam("password", $password);
    $statement->execute();

    // fetch() mengeluarkan nilai true untuk 1 data selanjutnya tanpa foreach
    var_dump($statement->fetch());
    if ($row = $statement->fetch()) {
        echo "Sukses Login : " . $row["username"] . PHP_EOL;
    } else {
        echo "Gagal Login" . PHP_EOL;
    }

    var_dump($statement->fetch());

    $connection = null;


?>