<?php
    require_once "../View/ViewShowTodoList.php";
    require_once "../BusinessLogic/AddTodoList.php";

    addTodoList("Ari");
    addTodoList("Syafri");
    
    viewShowTodoList();