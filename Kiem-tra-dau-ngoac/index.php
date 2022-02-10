<?php

$str = "s * (s - a)* (s - b)* (s - c)";




 function checkArray($str)
 {
     $stack = new SplStack();
     $arr = str_split($str);
     foreach ($arr as $value){
         if ($value == "("){
             $stack->push($value);
         }
         if ($value == ")"){
             if ($stack->isEmpty()){
                 return false;
             }
             else {
                 $stack->pop();
             }

         }

     }
     return $stack->isEmpty();
 }


print_r( checkArray($str));