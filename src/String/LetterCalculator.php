<?php

namespace Algo\String;

class LetterCalculator
{
    public function calculate($string)
    {
        $array = [];
        $a = strlen($string);
        for($i=0; $i<$a; $i++){
            if(!array_key_exists($string[$i],$array)){
                $array[$string[$i]] = 0;
            }
                $array[$string[$i]]++;
        }
        return $array;
    }
}