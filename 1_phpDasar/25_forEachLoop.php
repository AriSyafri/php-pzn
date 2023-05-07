<?php
    $names = ["Ari","Syafri","Ganteng"];

    // tanpa for each
    for ($i = 0; $i < count($names); $i++) {
        echo "hello data ke $i dengan nama : $names[$i]" . PHP_EOL;
    }

    // atau dengan foreach 
    foreach ($names as $index => $name) {
        echo "hello data ke $index dengan nama : $name" . PHP_EOL;
    }

    // dengan foreach
    foreach ($names as $name) {
        echo "foreach hello $name" . PHP_EOL;
    }

    $person = [
        "first_name" => "Ujang",
        "middle_name" => "Asep",
        "last_name" => "Goyobod"
    ];

    foreach ($person as $key => $value) {
        echo "$key : $value" . PHP_EOL;
    }

?>