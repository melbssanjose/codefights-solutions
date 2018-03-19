<?php
function makeArrayConsecutive2($statues) {
    sort($statues);
    $count = count($statues);
    $diff = 0;
    
    for($i=0;$i<$count-1;$i++){
        $diff = $diff + $statues[$i+1] - $statues[$i] - 1;
    }
    
    return $diff;
}
