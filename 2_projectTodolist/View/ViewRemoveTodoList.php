<?php
    require_once __DIR__ . "/../Helper/Input.php";
    require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

    function viewRemoveTodoList() {
        echo "Menghapus TODO " . PHP_EOL;
        
        $pilihan = input("Nomor (x untuk batal)");

        if($pilihan == "x"){
            echo "Batal menghapus" . PHP_EOL;
        } else {
            $succes = removeTodoList($pilihan);

            if ($succes) {
                echo "Sukses menghapus todo $pilihan" . PHP_EOL;
            } else {
                echo "Gagal menghapus $pilihan" . PHP_EOL;
            }
        }
    }