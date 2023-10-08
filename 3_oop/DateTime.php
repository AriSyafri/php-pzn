<?php

    $dateTime = new DateTime();
    $dateTime->setDate(1990,1,20);  // menggubah tanggal
    $dateTime->setTime(10,10,10,0); // menggubah waktu


    // date interval untuk maju atau mundur
    $dateTime->add(new DateInterval("P2Y")); // Period 2 year maju

    var_dump($dateTime);

    $minusOneMonth = new DateInterval("P1M"); // period 1 bulan mundur
    $minusOneMonth->invert = true;

    $dateTime->add($minusOneMonth);

    var_dump($dateTime);

    // mengatur timezone
    $now = new DateTime();
    var_dump($now);
    $now->setTimezone(new DateTimeZone("Antarctica/Mawson"));
    var_dump($now);

    // format date
    $string = $now->format("Y-m-d H:i:s");
    echo "waktu saat ini : $string". PHP_EOL;

    // parse DateTime
    $date = DateTime::createFromFormat("Y-m-d H:i:s", "2020-10-18 10:10:10", new DateTimeZone("Asia/Jakarta"));
    if ($date) {
        var_dump($date);
    } else {
        echo "format salah".PHP_EOL;
    }

?>