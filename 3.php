<?php

function count_handshake($hand)
{
    $hitung = 0;
    $loop = $hand - 1;

    for ($i = 1; $i < $hand; $i++) {
        $hitung += $loop--;
    }

    return $hitung;
}

$hasil = count_handshake(3);

print($hasil);