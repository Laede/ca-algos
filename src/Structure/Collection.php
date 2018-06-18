<?php

namespace Algo\Structure;

require_once 'CollectionItem.php';

class Collection
{
    /**
     * @var CollectionItem|null
     */
    private $collection;
    private $counter = 0;

    public function append($value)
    {
        $this->counter++;
        if (empty($this->collection)) {
            $this->collection = new CollectionItem($value);
        } else {
            $item = $this->collection;
            while ($item->getNext() !== null) {
                $item = $item->getNext();
            }
            $item->setNext(new CollectionItem($value));
        }
    }

    public function contains($value)
    {
        $item = $this->collection;
        if(empty($item)){
            return false;
        }
        if ($item->getValue() == $value) {
            return true;
        }
        while($item->getNext() != null){
            $item = $item->getNext();
            if($item->getValue() == $value){
                return true;
            }
        }
        return false;
    }

    public function indexOf($value)
    {
        $item = $this->collection;
        $indexCounter = 0;
        if (empty($this->collection)) {
            return -1;
        }
        if ($item->getValue() == $value) {
            return $indexCounter;
        } while($item->getNext() != null){
            $item = $item->getNext();
            $indexCounter++;
            if ($item->getValue() == $value)
            {
                return $indexCounter;
            }
        }
        return -1;
    }

    public function remove($value)
    {
        if(!$this->contains($value)){
            return false;
        }
        while($this->collection !== null && $this->collection->getValue() == $value){
            $this->counter--;
            $this->collection = $this->collection->getNext();
        }
        if($this->collection != null){
            $item = $this->collection;
            while($item->getNext() != null){
                if ($item->getNext()->getValue() == $value){
                    $this->counter--;
                    $item->setNext($item->getNext()->getNext());
                }
                $item = $item->getNext();
            }
        }
    }

    public function get($index)
    {
        if($this->collection != null){
            $item = $this->collection;
            for($i=0;$i<$index;$i++){
                $item = $item->getNext();
            }
            return $item->getValue();
        }
        return null;
    }

    public function getSize()
    {
       return $this->counter;
    }
}