<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../View/ViewAddTodoList.php";
require_once "../Helper/Input.php";

    addTodoList("ari");
    addTodoList("test");

    viewAddTodoList();

    showTodoList();

    viewAddTodoList();

    showTodoList();


    echo "sampai jumpa lagi" . PHP_EOL;