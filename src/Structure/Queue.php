<?php

namespace Algo\Structure;

require_once 'QueueItem.php';

class Queue
{
    /**
     * @var QueueItem|null
     */
    protected $queue;
    protected $counter;

    public function enqueue($element)
    {
        $this->counter++;
        if(empty($this->queue)){
            $this->queue = new QueueItem($element);
        } else {
            $item = $this->queue;
            while ($item->getNext() !== null){
                $item = $item->getNext();
            }
            $item->setNext(new QueueItem($element));
        }
    }
    public function dequeue()
    {
       $first = $this->queue->getValue();
       $this->queue = $this->queue->getNext();
       $this->counter--;
       return $first;
    }

    public function size()
    {
        return $this->counter;
    }
}
