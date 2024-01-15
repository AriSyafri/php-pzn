<?php

require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList";
require_once "../Helper/Input.php";


function viewShowTodoList(){


    while (true) {
        showTodoList();

        echo "Menu" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;
    
        $pilihan = input("Pilih");
    
        if($pilihan == "1") {
            viewAddTodoList();
        } else if($pilihan == "2") {
            viewRemoveTodoList();
        } else if($pilihan == "x") {
            // keluar
            break;
        } else {
            echo "Pilihan tidak di mengerti" . PHP_EOL;
        }
    }

    echo "sampai jumpa lagi" . PHP_EOL;


}