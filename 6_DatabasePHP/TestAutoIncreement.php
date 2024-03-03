<?php 
    require_once __DIR__ . "/GetConnection.php";

    $connection = getConnection();

    $connection->exec("INSERT INTO comments(email, comment) VALUES ('Asep@gmail.com', 'hi')");
    // mengetahui id terakhir dipakai dengan lastInsertId()
    $id = $connection->lastInsertId();

    echo $id . PHP_EOL;

    $connection = null;


?>