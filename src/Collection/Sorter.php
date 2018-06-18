<?php

namespace Algo\Collection;

use Algo\Structure\Queue;
use Algo\Structure\QueueItem;
use Algo\Structure\Stack;

class Sorter
{
//    public function sort($array)
//    {
//        $number = count($array);
//        for($i=0;$i<$number;$i++){
//            for($j=0;$j<$number;$j++){
//                if ($array[$i] < $array[$j]){
//                    $temp = $array[$i];
//                    $array[$i] = $array[$j];
//                    $array[$j] = $temp;
//                }
//            }
//        }
//        return $array;
//    }
////////////////////////second way of doing things//////////////////////////////////////
//    public function sort($array)
//    {   $sorted = [];
//        $tempStack = new Stack();
//        $stack = new Stack();
//        foreach ($array as $item){
//            $stack->push($item);
//        }
//        while($stack->size() != 0){
//            $stackTop = $stack->pop();
//            while(true){
//                if($tempStack->size() == 0){
//                    break;
//                }
//                $tempTop = $tempStack->pop();
//                if($tempTop >= $stackTop){
//                    $tempStack->push($tempTop);
//                    break;
//                }
//                $stack->push($tempTop);
//            }
//            $tempStack->push($stackTop);
//        }
//       while($tempStack->size() != 0){
//            $sorted[] = $tempStack->pop();
//       }
//       return $sorted;
//    }
//////////////////////////////////third way of doing things///////////////////////////////////////

    public function sort($array)
    {

        $sortedQueue = new Queue();
        $line = new Queue();
        $sorted = [];
        foreach ($array as $element){
            $line->enqueue($element);
        }
        while($line->size() != 0){
            $min = PHP_INT_MAX;
            for($i=0;$i<$line->size();$i++){
                $item = $line->dequeue();
                $line->enqueue($item);
                if($item<$min){
                    $min =$item;
                }
            }
            while(true){
                $item = $line->dequeue();
                if($item == $min){
                    $sortedQueue->enqueue($item);
                    break;
                } else {
                    $line->enqueue($item);
                }
            }
        }
        $size = $sortedQueue->size();
        for($i=0;$i<$size;$i++){
            $sorted[] = $sortedQueue->dequeue();
        }
        return $sorted;
    }
}
