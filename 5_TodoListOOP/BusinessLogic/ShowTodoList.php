<?php 

// menampilkan todo di list
function showTodoList(){

    global $todoList; // diambil dari model array TodoList.php

    echo "TODOLIST" . PHP_EOL;

    foreach ($todoList as $number => $value) {
        echo "$number . $value" . PHP_EOL; 
    }

}