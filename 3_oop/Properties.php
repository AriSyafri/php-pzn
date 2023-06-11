<?php
    require_once "data/Person.php";

    $person = new Person();
    $person->name = "Ari";
    // $person->address = "Subang";
    $person->country = "Belanda";

    var_dump($person);

    echo "Name : $person->name".PHP_EOL;
    echo "Address : $person->address".PHP_EOL;
    echo "Country : $person->country".PHP_EOL;
    $person->sayHello("ucup");
    echo "".PHP_EOL;

    // obj 2
    $person2 = new Person();
    $person2->name = "Ujang";
    $person2->address = "Surabaya";

    // $person2->country = "Indonesia";

    echo "Name : $person2->name".PHP_EOL;
    echo "Address : $person2->address".PHP_EOL;
    echo "Country : $person2->country".PHP_EOL;
    $person2->sayHello($person2->name);

?>