<?php

function pembagian($nilai1, $nilai2)
{
    if ($nilai1 > $nilai2) {
        $nilai3 = $nilai1;
        $nilai1 = $nilai2;
        $nilai2 = $nilai3;
    };

    for ($i=1; $i < 100; $i++) { 
        if ($nilai1 * $i == $nilai2 || $nilai1 * ($i+1) > $nilai2){
            return $i;
        }
    };
}

echo pembagian(1,2);