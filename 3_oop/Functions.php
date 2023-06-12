<?php
    require_once "data/Person.php";

    $ari = new Person("Ari","Subang");
    $ari->name = "Ari";
    $ari->sayHello("Udin");
    $ari->info();

    $joko = new Person("Udin","Cirebon");
    $joko->name = "Udin";
    $joko->sayHello(null);
    $joko->info();



?>