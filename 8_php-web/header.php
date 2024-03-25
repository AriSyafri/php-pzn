<?php 

    header('Appliation: Belajar PHP WEB');
    header('Author: Ujang Asep');

    $client = $_SERVER['HTTP_CLIENT_NAME'];

    echo "Hello $client";

?>