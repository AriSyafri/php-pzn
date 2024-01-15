<?php 
    require_once __DIR__ . "/../View/ViewShowTodoList.php";
    require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
    
    addTodoList("tes");
    addTodoList("ari");
    addTodoList("syafri");
    addTodoList("tes aja");


    viewShowTodoList();


