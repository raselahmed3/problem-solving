<?php
function selection_sort(array &$a) :void{
     $count = count($a);
     foreach($a as $k => $v){
          $minVal = $a[$k];
          $minValIndex = $k;
          for($i = $k + 1; $i < $count; $i++){
             if($minVal > $a[$i]){
                $minVal = $a[$i];
                $minValIndex = $i; 
             } 
        }
        if($minValIndex != $k){
           $temp = $a[$k];
           $a[$k] = $minVal;
           $a[$minValIndex] = $temp;
        }
       
     }  
}