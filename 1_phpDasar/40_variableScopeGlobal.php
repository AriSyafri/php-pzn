<?php 
    $name = "Ari"; // global scope

    function sayName() {
        echo $name; // error
    }

    sayName();
    echo $name;



?>