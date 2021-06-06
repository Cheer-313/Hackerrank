<?php
function divisibleSumPairs($n, $k, $ar) {
    // Write your code here
    $count = 0;
    foreach ($ar as $key => $num) {
        for($i = $key +1; $i < count($ar); $i++){
            if(($num + $ar[$i]) % $k == 0) $count++;
        }
    }
    return $count;
}
?>