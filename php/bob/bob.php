<?php

class Bob
{
    function respondTo($input)
    {
        if(strpos($input,'?')){
            return 'Sure.';
        }
        if(strtoupper($input)==$input){
            return 'Whoa, chill out!';
        }
        if(strtoupper($input)==$input){
            return 'Calm down, I know what I\'m doing!';
        }

        return 'Whatever.';
    }
}
