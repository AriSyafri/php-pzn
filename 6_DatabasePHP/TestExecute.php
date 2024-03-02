<?php
    require_once __DIR__ . '/GetConnection.php';

    $connection = getConnection();

    // menggunakan multiline sql
    $sql = <<<SQL
        INSERT INTO customers(id, name, email)
        VALUES ('aris','ARIS SUSANTO','aris@yahoo.com');

    SQL;

    $connection->exec($sql);


    $connection = null;