<?php 

    require_once "data/SayGoodbye.php";

    use Data\Traits\{Person, SayHello, SayGoodbye};

    $person = new Person();
    $person->goodBye("ujang");
    $person->hello("ujang");
    $person->name = "Ari";
    $person->run();
    var_dump($person);




