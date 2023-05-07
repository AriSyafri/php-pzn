<?php
    // tanpa null coalescing operator
    $data = [];
    if (isset($data['action'])) {
        $action = $data['action'];
    } else {
        $action = 'nothing';
    }

    echo $action . PHP_EOL;

    // dengan null coalescing operator
    $action = $data['action'] ?? 'nothing';
    echo $action;

?>