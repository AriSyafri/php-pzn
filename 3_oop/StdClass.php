<?php 
    $array = [
        "firstName" => "Ari",
        "lastName" => "Syafri"
    ];

    // konversi array menjadi object
    $object = (object) $array;
    var_dump($object);
    echo "first name $object->firstName" . PHP_EOL;
    echo "first name $object->lastName" . PHP_EOL;

    $arrayLagi = (array) $object;
    var_dump($arrayLagi);

    require_once "data/Person.php";

    $person = new Person("Ari", "Subang");
    var_dump($person);

    $arrayPerson = (array) $person;
    var_dump($arrayPerson);




