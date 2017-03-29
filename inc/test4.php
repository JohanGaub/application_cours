<?php
function maximum($array)
{
    // Your code here
    $array = 0;
    foreach ($array as $number) {
        $max = max($number);
    }
    return $max;

    function minimum($array)
    {
        // Your code here
        $array = 0;
        foreach ($array as $number) {
            $min = min($number);
        }
        return $min;
    }

    $tableau = [1, 2, 3, 4, 5];

    echo maximum($tableau);
}

?>