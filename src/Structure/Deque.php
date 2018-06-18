<?php

namespace Algo\Structure;

class Deque
{
    private $deque = [];

    public function push_front($element)
    {
        $array = [];
        $array[] = $element;
        foreach ($this->deque as $item){
            $array[] = $item;
        }
        $this->deque = $array;
    }

    public function push_back($element)
    {
        $this->deque[] = $element;
    }

    public function pop_front()
    {
        $a = $this->deque[0];
        unset($this->deque[0]);
        $this->deque = array_values($this->deque);
        return $a;
    }

    public function pop_back()
    {
        if(empty($this->deque)){
            return null;
        }
        $arrayKey = $this->size()-1;
        $unsetValue = $this->deque[$arrayKey];
        unset($this->deque[$arrayKey]);
        return $unsetValue;
    }

    public function size()
    {
        return count($this->deque);
    }
}