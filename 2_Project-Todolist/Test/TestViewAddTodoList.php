<?php

require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodoList.php";
require_once __DIR__ . "/../View/ViewAddTodoList.php";
require_once __DIR__ . "/../Helper/Input.php";

    addTodoList("ari");
    addTodoList("test");

    viewAddTodoList();

    showTodoList();

    viewAddTodoList();

    showTodoList();


    echo "sampai jumpa lagi" . PHP_EOL;