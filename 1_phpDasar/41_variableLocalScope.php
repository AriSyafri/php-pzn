<?php 
    function createName(){
        $name = "Ari"; // local scope
    }

    createName();
    echo $name . PHP_EOL;

?>