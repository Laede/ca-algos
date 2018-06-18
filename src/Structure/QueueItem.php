<?php

namespace Algo\Structure;

class QueueItem
{
    protected $value;
    protected $next = null;

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getNext()
    {
        return $this->next;
    }

    public function setNext($element)
    {
        $this->next = $element;
    }

    public function getValue()
    {
        return $this->value;
    }

}