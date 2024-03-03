<?php 
    require_once __DIR__ . "/GetConnection.php";

    $connection = getConnection();

    // konsep transaction dijalankan lebih dari 1 quert / DML namun jika ada yang gagalsemua melakukan rollback
    $connection->beginTransaction();

    $connection->exec("INSERT INTO comments(email, comment) VALUES ('ari_Syafri@gmail.com', 'tes')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('ari_Syafri@gmail.com', 'tes')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('ari_Syafri@gmail.com', 'tes')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('ari_Syafri@gmail.com', 'tes')");
    $connection->exec("INSERT INTO comments(email, comment) VALUES ('ari_Syafri@gmail.com', 'tes')");

    $connection->commit();


    $connection = null;




?>