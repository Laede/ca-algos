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
        var_dump($item = $this->collection);
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
        $this->counter--;
        $item = $this->collection;
      if(!$this->contains($value)){
          return false;
      }
      if($item->getValue() == $value){
          $this->collection = $item->getNext();
      }
      while($item->getNext() != null){
          if ($item->getNext()->getValue() == $value){
              $item->setNext($item->getNext()->getNext());
          }
          $item = $item->getNext();
      }
    }

    public function getSize()
    {
       return $this->counter;
    }
}