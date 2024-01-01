<?php 
    class Login {

    }

    $login = new Login();


    // mengetahui class yang digunakan 
    var_dump($login::class); //php 8
    var_dump(get_class($login));
    var_dump(Login::class);



?>