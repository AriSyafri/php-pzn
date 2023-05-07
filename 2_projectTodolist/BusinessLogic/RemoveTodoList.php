<?php
    // menghapus to dolist
    function removeTodoList(int $number) : bool {
        global $todolist;
        if ($number > sizeof($todolist)) {
            return false;
        }

        for ($i = $number; $i < sizeof($todolist); $i++) {
            $todolist[$i] = $todolist[$i + 1];
        }

        unset($todolist[sizeof($todolist)]);

        return true;
        // 1. Ari
        // 2. Syafri
        // 3. Ujang

        // 1. Ari
        // 2. Syafri [2 + 1]
        // 3. Ujang [3 + 1]
    }