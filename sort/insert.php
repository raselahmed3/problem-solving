<?php 
 
 function insert_sort(array &$a,$type = 'asc'):void {
    $count = count($a);
    for($i= 1;$i<$count;$i++){
        $current_val = $a[$i];

        $j = $i -1;
        if($type === 'asc'){
            while($j >= 0 && $a[$j] > $current_val){
                $a[$j + 1] = $a[$j];
                $j--;
            }
        }else if($type === 'desc'){
            while($j >= 0 && $a[$j] < $current_val){
                $a[$j + 1] = $a[$j];
                $j--;
            }
        }else{
            throw new Exception('Invalid sort type - must use asc or desc');
        }
       

        $a[$j + 1] = $current_val;
        
    }
}