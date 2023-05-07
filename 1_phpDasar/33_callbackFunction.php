<?php
    function sayHello(string $name, callable $filter) {
        $finalName = call_user_func($filter, $name);
        echo "Hello $finalName" . PHP_EOL;
    }

    sayHello("Ari", "strtolower");
    sayHello("Ari", "strtoupper");

    sayHello("Ujang", function (string $name) : string {
        return strtoupper($name);
    });

    sayHello("Ucup", fn($name) => strtoupper($name));

?>