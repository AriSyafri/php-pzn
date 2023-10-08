<?php

    require_once "data/Food.php";
    require_once "data/Animal.php";
    require_once "data/AnimalShelter.php";

    $catShelter = new \Data\CatShelter();
    $cat = $catShelter->adopt("Ucuy");  // ini covariance -->   dati parent jadi child
    $cat->eat(new \Data\AnimalFood());  //ini contravariance --> dari child jadi parent
    $cat->run();

    $dogShelter = new \Data\DogShelter();
    $dog = $dogShelter->adopt("Embul"); // ini covariance
    $dog->eat(new \Data\Food());    //ini contravariance
    $dog->run();

    
    