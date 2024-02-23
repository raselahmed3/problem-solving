<?php
function bubble_sort(array &$a) : void{
   $count = count($a);
   foreach($a as $k => $v){
      for($i = 0; $i < $count - $k -1; $i++){
         if($a[$i] > $a[$i + 1]){
            $temp = $a[$i + 1];
            $a[$i + 1] = $a[$i];
            $a[$i] = $temp;
         }
      }
     
   }
}