<?php
    // goto bisa loncat2 dari bagian mana ke mana
    goto a;
    echo "Hello World" . PHP_EOL;

    a:
    echo "Hello A" . PHP_EOL;

    // goto loop
    $counter = 1;
    while (true) {
        echo "ini adalah while ke - $counter" . PHP_EOL;
        $counter++;

        if ($counter > 10) {
            goto end;
        }
    }

    end:
    echo "End Loop";
?>