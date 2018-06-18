<?php

namespace Algo\Structure;

class Stack
{
    protected $stack = [];

    public function push($element)
    {
       $this->stack[] = $element;
    }

    public function pop()
    {
        if($this->size() == 0){
            return null;
        }
        $arrayKey = $this->size()-1;
        $unsetValue = $this->stack[$arrayKey];
        unset($this->stack[$arrayKey]);
        $this->stack = array_values($this->stack);
        return $unsetValue;
    }

    public function size()
    {
        return count($this->stack);
    }
}