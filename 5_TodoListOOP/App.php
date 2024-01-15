<?php
    // __DIR__ mengecek file direktori

    require_once __DIR__ . "/Model/TodoList.php";
    require_once __DIR__ . "/BusinessLogic/AddTodoList.php";
    require_once __DIR__ . "/BusinessLogic/RemoveTodoList.php";
    require_once __DIR__ . "/BusinessLogic/ShowTodoList.php";
    require_once __DIR__ . "/View/ViewAddTodoList.php";
    require_once __DIR__ . "/View/ViewRemoveTodoList.php";
    require_once __DIR__ . "/View/ViewShowTodolist.php";
    require_once __DIR__ . "/Helper/Input.php";
    

    echo "Aplikasi to do list" . PHP_EOL;
    viewShowTodoList();
    


?>