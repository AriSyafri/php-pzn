<?php 
    require_once "../Model/TodoList.php";
    require_once "../BusinessLogic/AddTodoList.php";
    require_once "../BusinessLogic/ShowTodoList.php";

    $todoList[1] = "belajar PHP Dasar";
    $todoList[2] = "belajar PHP OOP";
    $todoList[3] = "belajar PHP Database";

    addTodoList("tambah data");

    showTodoList();