<?php 
    require_once __DIR__ . "/GetConnection.php";

    $connection = getConnection();

    // rollback keulang namun id auto increement tidak keulang dan terus increement
    $connection->beginTransaction();

    $connection->exec("INSERT INTO comments(email, comment) VALUES ('budi@gmail.com', 'tes')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('agus@gmail.com', 'tes')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('deden@gmail.com', 'tes')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('raden@gmail.com', 'tes')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('ujang@gmail.com', 'tes')");

    $connection->rollBack();


    $connection = null;
?>