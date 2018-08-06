<?php

function from($date)
{
    $gs = 1000000000;
    $current = $gs;

    $year = floor($current/(365*24*60*60));
    $current = $current%(365*24*60*60);
    $day = floor($current/(24*60*60));
    $current = $current%(24*60*60);
    $hour = floor($current/(60*60));
    $current = $current%(60*60);
    $minute = floor($current/(60));
    $current = $current%(60);
    $second = $current;

//    echo $year;

//    return $date->modify('+'.$year.' year');

    return $date->modify('+'.$year.' year')->modify('+'.$day.' day')->modify('+'.$hour.' hour')->modify('+'.$minute.' minute')->modify('+'.$second.' second');
}