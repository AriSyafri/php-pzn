<?php
    function sayHello() {
        echo "Hello function" . PHP_EOL;
    }

    sayHello();
    sayHello();

    // function di if
    $buat = false;

    if ($buat) {
        function says(){
            echo "Speaking2". PHP_EOL;
        }
    }

    says();
    says();
?>