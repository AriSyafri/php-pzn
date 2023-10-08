<?php

    require_once "data/Student.php";

    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Ari";
    $student1->value = 1;

    $student2 = new Student();
    $student2->id = "1";
    $student2->name = "Ari";
    $student2->value = 1;

    var_dump($student1 == $student2);
    var_dump($student1 === $student1); //true
    var_dump($student1 === $student2); //false
