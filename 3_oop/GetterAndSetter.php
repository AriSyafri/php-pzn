<?php 
    require_once "data/Category.php";

    $category = new Category();
    $category->setName("Handphone");
    $category->setExpensive(true);
    
    $category->setName(""); // ini ga kebaca

    echo "Name : {$category->getName()}" . PHP_EOL;
    echo "Expensive : {$category->isExpensive()}" . PHP_EOL;
    

