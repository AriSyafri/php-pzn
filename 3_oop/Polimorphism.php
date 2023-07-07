<?php
    require_once "data/Programmer.php";
    // kemampuan polimophism kemampuan merubah data dari turunannya
    $company = new Company();

    $company->programmer = new Programmer("Ari");
    var_dump($company);
    
    $company->programmer = new BackendProgrammer("Ari");
    var_dump($company);

    $company->programmer = new FrontendProgrammer("Ari");
    var_dump($company);

    //polimorfisme di function argument
    sayHelloProgrammer(new Programmer("Ujang"));
    sayHelloProgrammer(new BackendProgrammer("Ujang"));
    sayHelloProgrammer(new FrontendProgrammer("Ujang"));

?>