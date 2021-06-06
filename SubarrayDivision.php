<?php
function birthday($s, $d, $m) {
    // Write your code here
    $count = 0;
    if($m > count($s)) return 0;
    for($i = 0; $i <= count($s)-1; $i++){
        $total = 0;
        for($j = $i; $j <= $i+$m-1; $j++){
            $total += $s[$j];
        }
        if($total == $d) $count++;
        if($i+$m > count($s) -1) break; //Check out of array
    }
    return $count;
}
?>