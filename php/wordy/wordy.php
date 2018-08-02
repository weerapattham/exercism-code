<?php

function calculate($input)
{
    $separate = explode(" ",$input);
    $operation = array('+'=>'plus', '-'=>'minus', '*'=>'multiplied', '/'=>'divided', '**'=>'raised');

    $get_operation = array_intersect($separate, $operation);
    preg_match_all('!\d+!', $input, $get_number);

    if(sizeof($get_operation)==1){
        foreach ($operation as $key => $value){
            if(array_pop($get_operation)==$value){
                if($key=='+'){
                    $result = plus($get_number[0][0], $get_number[0][1]);
                    return $result;
                }
            }
        }
    }
}

function plus($a, $b){
    return $a+$b;
}

function minus($a, $b){
    return $a-$b;
}

function multiplied($a, $b){
    return $a*$b;
}

function divided($a, $b){
    return $a/$b;
}

function raised($a, $b){
    return $a**$b;
}