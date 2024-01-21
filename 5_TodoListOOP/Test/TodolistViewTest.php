<?php

    require __DIR__ . "/../Entity/Todolist.php";
    require __DIR__ . "/../Repository/TodolistRepository.php";
    require __DIR__ . "/../Service/TodolistService.php";
    require __DIR__ . "/../View/TodolistView.php";
    require __DIR__ . "/../Helper/InputHelper.php";

    use \Entity\Todolist;
    use \Repository\TodolistRepositoryImpl;
    use \Service\TodolistServiceImpl;
    use \View\TodolistView;

    function testViewShowTodolist(): void {

        $todolistRepository = new TodolistRepositoryImpl();
        $todolistService = new TodolistServiceImpl($todolistRepository);
        $todolistView = new TodolistView($todolistService);

        $todolistService->addTodolist("belajar php8");
        $todolistService->addTodolist("belajar php mvc");
        $todolistService->addTodolist("belajar php laravel");
        $todolistService->addTodolist("belajar php Database");

        $todolistView->showTodolist();

    } 

    function testViewAddTodolist(): void {

        $todolistRepository = new TodolistRepositoryImpl();
        $todolistService = new TodolistServiceImpl($todolistRepository);
        $todolistView = new TodolistView($todolistService);

        $todolistService->addTodolist("belajar php8");
        $todolistService->addTodolist("belajar php mvc");
        $todolistService->addTodolist("belajar php laravel");
        $todolistService->addTodolist("belajar php Database");

        $todolistService->showTodolist();

        $todolistView->addTodolist();

        $todolistService->showTodolist();

    } 

    testViewAddTodolist();