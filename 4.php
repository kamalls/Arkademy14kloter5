<?php

function findDuplicates($kalimat)
{
    $kalimat = str_replace(" ", "", $kalimat);
    $container = [];
    $kalimatArr = str_split($kalimat);

    for ($i = 0; $i < count($kalimatArr); $i++) {
        $nilai = array_count_values($kalimatArr)[$kalimatArr[$i]];
        if ($nilai > 1) {
            $container[] = "$kalimatArr[$i]: $nilai ";
        }
    }

    if (count($container) < 1) {
        return $final = ["Tidak ada karakter yang berulang"];
    }

    return $final = array_unique($container);
}

$hasil = findDuplicates("my name arda budi santoso");

echo "Output : </br>\n";
foreach ($hasil as $value) {
    echo $value . " </br>\n";
}