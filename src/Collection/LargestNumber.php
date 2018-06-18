<?php

namespace Algo\Collection;

class LargestNumber
{

    public function find($array)
    {
        if(count($array) == 0){
            return null;
        }
        $times = count($array);
        $temp = $array[0];
        for($i=0;$i<$times;$i++){
            if($temp < $array[$i]  ){
                $temp = $array[$i];
            }
        }
        return $temp;
    }
}