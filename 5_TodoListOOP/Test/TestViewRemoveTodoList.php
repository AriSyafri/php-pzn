<?php 

    require_once __DIR__ . "/../Model/TodoList.php";
    require_once __DIR__ . "/../View/ViewRemoveTodoList.php";
    require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
    require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

    addTodoList("Ari");
    addTodoList("ujang");
    addTodoList("asep");
    addTodoList("Ari");

    showTodoList();
    viewRemoveTodoList();

    showTodoList();
    viewRemoveTodoList();

    showTodoList();
    viewRemoveTodoList();

    showTodoList();
