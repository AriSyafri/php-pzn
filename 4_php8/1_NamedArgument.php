<?php
    function sayHello(string $first, string $middle = "", string $last): void {
        echo "Hello $first $middle $last".PHP_EOL;
    }

    // tanpa named argument
    sayHello("Ari","Syafri","Agus");
    //sayHello("Ari","Agus"); error

    // dengan named argument
    sayHello(last:"Agus",first:"ari",middle:"syafri");
    //sayHello(first: "ari", last: "Agus"); phpbaru gabisa
    


?>