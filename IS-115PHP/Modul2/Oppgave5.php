<?php

    $alfabetet = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $storebokstaver = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $tall = "0123456789";

    $antallOrd = strlen($alfabetet);
    $antallSiffer = strlen($tall);
    $antallStoreBokstaver = strlen($storebokstaver);

    $tilfeldigPassord = "";

    $tilfeldigPassord .= $tall[rand(0, $antallSiffer - 1)];
    $tilfeldigPassord .= $storebokstaver[rand(0, $antallStoreBokstaver - 1)];

    for ($i = 0; $i < 6; $i++) {
        $tilfeldigPassord .= $alfabetet[rand(0, $antallOrd - 1)];
    }

    echo "Passordet ditt er: " . str_shuffle($tilfeldigPassord);



?>