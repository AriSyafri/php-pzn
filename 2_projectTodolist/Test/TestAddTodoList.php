<?php
    require_once "../Model/TodoList.php";
    require_once "../BusinessLogic/AddTodoList.php";



    addTodoList("Ari");
    addTodoList("Syafri");

    var_dump($todolist);
