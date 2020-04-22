<?php
function bubbleSort($arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
$arr = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];

echo "Given array: ".implode(' > ',$arr);
echo "<br>";
$arr = bubbleSort($arr);
echo "Bubble sorted array: ".implode(' < ',$arr);