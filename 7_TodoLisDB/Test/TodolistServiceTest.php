<?php 

    require __DIR__ . "/../Entity/Todolist.php";
    require __DIR__ . "/../Repository/TodolistRepository.php";
    require __DIR__ . "/../Service/TodolistService.php";
    require __DIR__ . "/../Config/Database.php";

    use Entity\Todolist;
    use Service\TodolistServiceImpl;
    use Repository\TodolistRepositoryImpl;

    function testShowTodolist(): void {

        $connection = \Config\Database::getConnection();
        $todolistRepository = new TodolistRepositoryImpl($connection);
        $todolistService = new TodolistServiceImpl($todolistRepository);
        $todolistService->addTodolist("belajar php native");
        $todolistService->addTodolist("belajar php laravel 10");

        $todolistService->showTodolist();

 
    }

    function testAddTodolist(): void {

        $connection = \Config\Database::getConnection();
        $todolistRepository = new TodolistRepositoryImpl($connection);

        $todolistService = new TodolistServiceImpl($todolistRepository);
        $todolistService->addTodolist("belajar php native");
        $todolistService->addTodolist("belajar php laravel 10");

        // $todolistService->showTodolist();
    }

    function testRemoveTodolist(): void {

        $connection = \Config\Database::getConnection();
        $todolistRepository = new TodolistRepositoryImpl($connection);

        $todolistService = new TodolistServiceImpl($todolistRepository);

        echo $todolistService->removeTodolist(5) . PHP_EOL;
        echo $todolistService->removeTodolist(4) . PHP_EOL;
        echo $todolistService->removeTodolist(2) . PHP_EOL;

    }



    testShowTodolist();
    // testAddTodolist();

    // testRemoveTodolist();