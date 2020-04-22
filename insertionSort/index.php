<?php
function insertionSort($data)
{
    $n=count($data);
    $next=null;
    for($i=1; $i<$n; $i++)
    {
        $next=$data[$i];
        for($j=$i-1; $j>=0; $j--)
        {
            if( $data[$j]>$next )
            {
                $data[$j+1]=$data[$j];
            }
            else
            {
                break;
            }
        }
        $data[$j+1]=$next;

    }

    return $data;
}
$arr=[5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
echo 'Given array: '.implode(" | ",$arr);
echo "<br>";
echo 'Insertion sorted array: '.implode(" < ",insertionSort($arr));