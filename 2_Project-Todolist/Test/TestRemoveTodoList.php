<?php 
    require_once __DIR__ . "/../Model/TodoList.php";
    require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";
    require_once __DIR__ . "/../BusinessLogic/AddTodoList.php";
    require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

    $todoList[1] = "belajar PHP Dasar";
    $todoList[2] = "belajar PHP OOP";
    $todoList[3] = "belajar PHP Database";

    addTodoList("Belajar IOT");

    showTodoList();

    removeTodoList(1);
    showTodoList();

    removeTodoList(3);
    showTodoList();

    $tesSukses = removeTodoList(5);
    var_dump($tesSukses);

    showTodoList();

    removeTodoList(1);
    showTodoList();

