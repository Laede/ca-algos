<?php

namespace Algo\String;

class Palindrome
{
    public function isValid($value)
    {
        $value = (string)$value;
        $times = strlen($value);
        for($i=0;$i<($times/2);$i++){
           if ($value[$i] !== $value[$times - 1 - $i]){
               return false;
           }
        }
        return true;
    }
}
