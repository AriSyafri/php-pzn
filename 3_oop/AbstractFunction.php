<?php 
    require_once "data/Animal.php";

    use Data\{Animal, Cat, Dog};

    $cat = new Cat();
    $cat->name = "luna";
    $cat->run();

    $dog = new Dog();
    $cat->name = "iggy";
    $cat->run();
