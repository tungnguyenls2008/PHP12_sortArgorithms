<?php

function selectionSort($data)
{
    $n = count($data);
    $nextSwap = null;
    $temp = null;

    for ($i = 0; $i < $n - 1; $i++) {

        $nextSwap = $i;
        for ($j = $i + 1; $j < $n; $j++) {
            if ($data[$j] < $data[$nextSwap]) {
                $nextSwap = $j;
            }
        }

        $temp = $data[$i];
        $data[$i] = $data[$nextSwap];
        $data[$nextSwap] = $temp;
    }

    return $data;
}

$arr = [1, 9, 4.5, 6.6, 5.7, -4.5];
echo 'Given array: ' . implode(" < ", $arr);
echo "<br>";
echo 'Selection sorted array: ' . implode(" < ", selectionSort($arr));