<?php
    // break
    $counter = 1;
    while (true) {
        echo "Hello break : " . $counter . PHP_EOL;
        $counter++;

        if ($counter > 10) {
            break;
        }
    }

    // continue

    for ($counter = 0; $counter <= 20; $counter++) {
        if ($counter % 2 == 0) {
            continue;
        }
        echo "Hello contunue " . $counter . PHP_EOL;
    }

?>