<?php

class Bob
{
    function findExclamation($string)
    {
        return strpos($string, '!');
    }
    function isUpperCase($string)
    {
        return strtoupper($string)==$string;
    }


    function respondTo($input)
    {
        if($this->isUpperCase($input) || $this->findExclamation())
        {
            return 'Whoa, chill out!';
        }

//        if(strtoupper($input)==$input){
//            return 'Whoa, chill out!';
//        }

//        if(strtoupper($input)==$input){
//            return 'Whoa, chill out!';
//        }
//        if(strtoupper($input)==$input){
//            return 'Calm down, I know what I\'m doing!';
//        }
//        if(is_numeric($input)){
//            return 'Whatever.';
//        }
//        if(strpos($input,'?')){
//            return 'Sure.';
//        }
//
//        return 'Whatever.';
    }
}
