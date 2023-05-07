<?php
    require_once "../View/ViewAddTodoList.php";
    require_once "../BusinessLogic/AddTodoList.php";
    require_once "../BusinessLogic/ShowTodoList.php";

    addTodoList("Ari");
    addTodoList("Syafri");
    addTodoList("eep");

    viewAddTodoList();

    showTodoList();

    viewAddTodoList();

    showTodoList();

?>