<?php 
    require_once __DIR__ . "/GetConnection.php";

    $connection = getConnection();
    
    $username = "ujang";
    $password = "rahasia";

    // ketika dengan prepare maka menggunakan parameter :namaParameter bukan kutip ('') lagi 
    $sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
    $statement = $connection->prepare($sql);
    $statement->bindParam(1, $username);
    $statement->bindParam(2, $password);
    $statement->execute();

    $success = false;
    $find_user = null;
    foreach ($statement as $row) {
        // sukses
        $success = true;
        $find_user = $row["username"];
    }

    if($success) {
        echo "Sukses Login : " . $find_user . PHP_EOL;
    } else {
        echo "Gagal Login" . PHP_EOL;
    }

    $connection = null;


?>