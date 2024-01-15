<?php 
    require_once __DIR__ . "/../Model/TodoList.php";
    require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";

    $todoList[1] = "belajar PHP Dasar";
    $todoList[2] = "belajar PHP OOP";
    $todoList[3] = "belajar PHP Database";

    showTodoList();