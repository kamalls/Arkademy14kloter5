<?php

function findHighestProfit($hari)
{
    $container = [];
    for ($i = 0; $i < count($hari); $i++) {
        for ($x = $i + 1; $x < count($hari); $x++) {
            $container[] = ($hari[$i] - $hari[$x]) * -1;
        }
    }

    if (max($container) <= 0) {
        return "Tidak bisa mendapatkan profit pada hari-hari ini";
    }

    return max($container);
}

$hasil = findHighestProfit([10, 2, 11, 20, 3, 5]);

print("Output: " . $hasil);