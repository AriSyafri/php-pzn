<?php 

    require __DIR__ . "/../Entity/Todolist.php";
    require __DIR__ . "/../Repository/TodolistRepository.php";
    require __DIR__ . "/../Service/TodolistService.php";

    use Service\TodolistServiceImpl;
    use Repository\TodolistRepositoryImpl;

    function testShowTodolist(): void {
        $todolistRepository = new TodolistRepositoryImpl();

        $todolistRepository->todolist[1] = "belajar php";
        $todolistRepository->todolist[2] = "belajar php OOP";
        $todolistRepository->todolist[3] = "belajar php MVC";

        $todolistService = new TodolistServiceImpl($todolistRepository);

        $todolistService->showTodolist();
    }

    testShowTodolist();