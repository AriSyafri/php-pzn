<?php

    require_once "data/Shape.php";

    use Data\{Shape, Retangle};

    $shape = new Shape();
    echo $shape->getCorner().PHP_EOL;

    $retangle = new Retangle();
    echo $retangle->getCorner().PHP_EOL;
    echo $retangle->getParentCorner().PHP_EOL;

