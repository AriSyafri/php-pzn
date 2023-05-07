<?php
    function foo() {
        echo "FOO" . PHP_EOL;
    }

    function bar() { 
        echo "BAR" . PHP_EOL;
    }

    $functionYangAkanDipanggil = "foo";
    $functionYangAkanDipanggil();

    $functionYangAkanDipanggil = "bar";
    $functionYangAkanDipanggil();

    // kegunaan variable function

    function sayHello(string $name, $filter) {
        $finalName = $filter($name);
        echo "Hello $finalName" . PHP_EOL;
    }

    function sampleFunction(string $name) : string {
        return "Sample $name";
    }

    sayHello("Ari","sampleFunction");
    sayHello("Ari","strtolower");
    sayHello("Ari","strtoupper");