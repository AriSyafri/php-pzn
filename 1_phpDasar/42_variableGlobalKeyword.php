<?php

    $name = "Ari"; // global scope

    function sayName() {
        global $name; // global keyword
        echo "hai $name ". PHP_EOL;
        echo "saya Bot";
    }

    sayName();

?>