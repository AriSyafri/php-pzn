<?php 

    require __DIR__ . "/../Entity/Todolist.php";
    require __DIR__ . "/../Repository/TodolistRepository.php";
    require __DIR__ . "/../Service/TodolistService.php";

    use Entity\Todolist;
    use Service\TodolistServiceImpl;
    use Repository\TodolistRepositoryImpl;

    function testShowTodolist(): void {
        $todolistRepository = new TodolistRepositoryImpl();

        $todolistRepository->todolist[1] = new Todolist("belajar php");
        $todolistRepository->todolist[2] = new Todolist("belajar php oop");
        $todolistRepository->todolist[3] = new Todolist("belajar php mvc");

        $todolistService = new TodolistServiceImpl($todolistRepository);

        $todolistService->showTodolist();
    }

    function testAddTodolist(): void {
        $todolistRepository = new TodolistRepositoryImpl();

        $todolistService = new TodolistServiceImpl($todolistRepository);
        $todolistService->addTodolist("belajar php8");
        $todolistService->addTodolist("belajar php laravel");

        $todolistService->showTodolist();
    }



    // testShowTodolist();

    testAddTodolist();