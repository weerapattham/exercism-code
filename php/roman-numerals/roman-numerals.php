<?php

function toRoman($input)
{
    $number = $input;
    $result = '';
    $roman_num = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400,
        'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40,
        'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
    foreach ($roman_num as $roman => $value)
    {
        $count = $number / $value;
        $result .= str_repeat($roman, $count);
        $number = $number % $value;
    }
    return $result;
}