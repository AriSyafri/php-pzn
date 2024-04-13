<?php 
    require_once __DIR__ . '/vendor/autoload.php';

    use Pzn\BelajarPhpComposer\Data\People;

    $people = new People("Ari");

    echo $people->sayHello("Budi") . PHP_EOL;


?>