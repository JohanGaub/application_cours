<?php
function solution($number){
    $total = 0;
    for ($calcul = 0 ; $calcul < $number ; $calcul++)
    {
        if(($calcul % 3 == 0) OR ($calcul % 5 == 0))
        {
            $total += $calcul;
        }
    }
    return $total;
}

