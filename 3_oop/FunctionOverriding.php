<?php

    require_once "data/Manager.php";

    $manager = new Manager();
    $manager->name = "Budi";
    $manager->sayHello("Joko");

    $vp = new VicePresident();
    $vp->name = "Ari";
    $vp->sayHello("Ucup");

    
?>