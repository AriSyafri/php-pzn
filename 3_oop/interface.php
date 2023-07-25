<?php

    require_once "data/Car.php";
    use Data\{Avanza};

    $car = new Avanza();
    $car->drive();
    $car->getTime();
    $car->isMaintenance();
    
    // $isMT = new IsMaintenance();
    // $isMT->drive();