<?php 

    namespace View {

        use Service\TodolistService;
        use Helper\InputHelper;

        class TodolistView {

            private TodolistService $todolistService;

            public function __construct(TodolistService $todolistService) {
                $this->todolistService = $todolistService;
            }
            

            function showTodolist(): void {    

                while (true) {
                    $this->todolistService->showTodoList();

                    echo "Menu" . PHP_EOL;
                    echo "1. Tambah Todo" . PHP_EOL;
                    echo "2. Hapus Todo" . PHP_EOL;
                    echo "x. Keluar" . PHP_EOL;
                
                    $pilihan = InputHelper::input("Pilih");
                
                    if($pilihan == "1") {
                        $this->addTodolist();
                    } else if($pilihan == "2") {
                        $this->removeTodolist();
                    } else if($pilihan == "x") {
                        // keluar
                        break;
                    } else {
                        echo "Pilihan tidak di mengerti" . PHP_EOL;
                    }
                }

                echo "sampai jumpa lagi" . PHP_EOL;
            }
    
            function addTodolist(): void {

                echo "Menambah Todo" . PHP_EOL;

                $todo = InputHelper::input("Todo (x untuk batal)");
            
                if($todo == "x") {
                    echo "Batal menambah todo" . PHP_EOL;
                } else {
                    $this->todolistService->addTodolist($todo);
                }
            
    
            }
    
            function removeTodolist(): void {
                echo "Menghapus todo" . PHP_EOL;

                $pilihan = InputHelper::input("Nomor (x untuk batalkan)");
            
                if ($pilihan == "x") {
                    echo "Batal menghapus todo" . PHP_EOL;
                } else {
                    $this->todolistService->removeTodolist($pilihan);
                }
            }
        }
        }
