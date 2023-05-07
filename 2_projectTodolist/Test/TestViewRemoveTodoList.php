<?php
    require_once "../Model/TodoList.php";
    require_once "../BusinessLogic/AddTodoList.php";
    require_once "../BusinessLogic/ShowTodoList.php";
    require_once "../View/ViewRemoveTodoList.php";

    addTodoList("Ari");
    addTodoList("Ujang");
    addTodoList("deden");

    showTodoList();

    viewRemoveTodoList();

    showTodoList();



