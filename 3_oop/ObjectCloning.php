<?php 

    require_once "data/Student.php";
    $student1 = new Student();
    $student1->id = "1";
    $student1->name = "Ari";
    $student1->value = 100;
    $student1->setSample("xxx");

    var_dump($student1);
    
    
    // cara manual clone
    $student3 = new Student();
    $student3->id = $student1->id;
    $student3->name = $student1->name;
    $student3->value = $student1->value;
    var_dump($student3);
    
    //cara cepat dengan clone
    $student2 = clone $student1;
    var_dump($student2);
    
    // 

