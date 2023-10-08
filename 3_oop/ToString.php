<?php
    require_once "data/Student.php";

    $student1 = new Student();

    $student1->id = "1";
    $student1->name = "Ari";
    $student1->value = 2;

    $string = (string) $student1;
    echo $string . PHP_EOL;
