<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    if(strlen($a)!==strlen($b)) {
        throw new \InvalidArgumentException('DNA strands must be of equal length.');
    }

    $count = 0;
    $str_length = strlen($a);
    for($i=0; $i<$str_length; $i++){
        if(strcmp($a[$i], $b[$i])!==0){
            $count+=1;
        }
    }

    return $count;
}