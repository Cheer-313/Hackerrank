<?php
function countElement($arr, $num){
    $count = 0;
    foreach ($arr as $key => $value) {
        # code...
        if($value == $num) $count++;
    }
    return $count;
}
function migratoryBirds($arr) {
    // Write your code here
    $max = 0;
    for($i = 1; $i <= 5; $i++){
        $arr_tmp[$i] = countElement($arr,$i);
    }
    foreach ($arr_tmp as $key => $value) {
        if($value > $max){
            $max = $value;
            $result = $key;
        }
    }

    //Case 2:
    // $arr_tmp = array_count_values($arr);
    // $keys = array_keys($arr_tmp, max($arr_tmp));
    // $result = min($keys);
    return $result;
}
?>