<?php

function selectionSort($data)
{
    $n=count($data);
    $nextSwap=null;     //the index of next min value or max value
    $temp=null;

    for($i=0; $i<$n-1; $i++)//outer loop
    {

        $nextSwap=$i;
        for($j=$i+1; $j<$n; $j++)//inner loop
        {
            if( $data[$j]<$data[$nextSwap] ) //change the < to > for descending order
            {
                $nextSwap=$j;
            }
        }

        //swap the current index of the outer loop with the next min value
        $temp=$data[$i];
        $data[$i]=$data[$nextSwap];
        $data[$nextSwap]=$temp;
    }

    return $data;
}
$arr=array(1, 9, 4.5, 6.6, 5.7, -4.5);
echo 'Given array: '.implode(", ",$arr);
echo "<br>";
echo 'Selection sorted array: '.implode(", ",selectionSort($arr));