<?php

// menambah todo ke list
function addTodoList(string $todo){
    global $todoList;

    global $todoList;

    // ini agar nanti ketika jumlah data ditambah 1 ke indeks
    $number = sizeof($todoList) + 1;

    $todoList[$number] = $todo;
    
}