<?php

    require_once "../Model/TodoList.php";
    require_once "../BusinessLogic/RemoveTodoList.php";
    require_once "../BusinessLogic/ShowTodoList.php";
    require_once "../BusinessLogic/addTodoList.php";
    
    addTodoList("Ujang");
    addTodoList("Deden");
    addTodolist("Ari");
    addTodoList("Raden");
    addTodoList("Yuni");
    addTodolist("Aris");

    showTodoList();

    removeTodolist(3);

    showTodoList();

    $succes = removeTodolist(10);
    var_dump($succes);
    // showTodoList();