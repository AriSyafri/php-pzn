<?php

    interface HelloWorld {
        function sayHello(): void;
    }

    // ga pake ini

    // class SampleHelloWorld implements HelloWorld {
    //     public function sayHello(): void {
    //         echo "Hello world" . PHP_EOL;
    //     }
    // }
    
    //$helloWorld = new SampleHelloWorld();
    

    // anon class
    $helloWorld = new class("Ari") implements HelloWorld {

        public string $name;

        // menggunakan constructor
        public function __construct(string $name) {
            $this->name = $name;
        }

        public function sayHello(): void {
            echo "Hello $this->name" . PHP_EOL;
        }
    };

    $helloWorld->sayHello();