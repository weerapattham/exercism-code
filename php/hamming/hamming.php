<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    $i = 0;
    $count = 0;
    if(strlen($a)==strlen($b)){
        $str_length = strlen($a);

        for($i; $i<$str_length; $i++){
            if(strcmp($a[$i], $b[$i])!==0){
                $count+=1;
            }
        }
        return $count;
    }
    else{
        throw new Exception('DNA strands must be of equal length.');
    }
}
