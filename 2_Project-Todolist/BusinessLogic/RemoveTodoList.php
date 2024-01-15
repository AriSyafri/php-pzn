<?php
// menghapus todo di list
function removeTodoList(int $number) : bool {

    global $todoList;
    if($number > sizeof($todoList)) {
        return false;
    }

    
    //hapus dan update index
    for ($i = $number; $i < sizeof($todoList); $i++){
        // logika nge geser 
        $todoList[$i] = $todoList[$i + 1];
        
    }
    // bagian hapus record terakhir
    unset($todoList[sizeof($todoList)]);

    return true;
}
