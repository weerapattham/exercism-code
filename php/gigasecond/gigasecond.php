<?php

function from($date)
{
    $new_date = clone $date;
    $gs = 1000000000;

    return $new_date->modify('+'.$gs.' second');
}