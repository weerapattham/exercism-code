<?php

class PhoneNumber
{
    public function __construct($param) {
        $this->param = $param;

        $phone_number = preg_replace("/[^A-Za-z0-9]/", '', $this->param);
        if(strlen($phone_number)!=10){
            throw new \InvalidArgumentException();
        }
    }

    public function number()
    {
        $phone_number = preg_replace("/[^A-Za-z0-9]/", '', $this->param);

        if(strlen($phone_number)==10){
            return $phone_number;
        }


    }

    public function areaCode()
    {
        $phone_number = preg_replace("/[^A-Za-z0-9]/", '', $this->param);
        $i = 0;
        $areaCode = '';
        if(strlen($phone_number)==10)
        {
            for($i; $i<3; $i++)
            {
                $areaCode .= $phone_number[$i];
            }
        return $areaCode;
        }
    }

    public function prettyPrint()
    {
        $phone_number = preg_replace("/[^A-Za-z0-9]/", '', $this->param);
        $number_len = strlen($phone_number);
        $prettyPrint = '(';

        if($number_len==11&&$phone_number[0]==1)
        {
            $phone_number = substr($phone_number, 1);
            $number_len = strlen($phone_number);
        }

        if($number_len==10)
        {
            $i = 0;
            for($i; $i<$number_len; $i++)
            {
                $prettyPrint .= $phone_number[$i];
                if($i==2){
                    $prettyPrint .= ') ';
                }
                if($i==5){
                    $prettyPrint .= '-';
                }
            }
            return $prettyPrint;
        }
    }
}