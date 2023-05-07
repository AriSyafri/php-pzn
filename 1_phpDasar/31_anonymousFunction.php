<?php
    // anonymous function
    $sayHello = function (string $name){
        echo "Hello $name" . PHP_EOL;
    };

    $sayHello("ujang");
    $sayHello("ari");

    // ano function argument
    function sayGoodbye(string $name, $filter) {
        $finalName = $filter($name);
        echo "Good bye $finalName" . PHP_EOL;
    };

    
    $filterFunction = function(string $name): string {
        return strtolower($name);
    };
    
    sayGoodbye("ari", function(string $name): string {
        return strtoupper($name);
    });

    sayGoodbye("Ucup", $filterFunction);

    // mengakses variable diluar closure / anonymous function
    $firstName = "Ari";
    $lastName = "Syafri";

    $sayHelloAri = function () use ($firstName, $lastName) {
        echo "hello $firstName $lastName" . PHP_EOL;
    };

    $sayHelloAri();

?>