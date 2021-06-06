<?php
function kangaroo($x1, $v1, $x2, $v2) {
    // Write your code here
    //Case 1:
    // if ($x1 > $x2 || $v2 >= $v1){
    //     return 'NO';
    // } 
    // elseif ($x1 == $x2){ 
    //     return 'YES';
    // }
    // $x1 += $v1;
    // $x2 += $v2;
    // return kangaroo($x1, $v1, $x2, $v2);

    // Case 2:
    // if($x2 > $x1 && $v2 > $v1){
    //     return 'NO';
    // }
    // while ($x1 <= $x2) {
    //     # code...
    //     if($x1 == $x2){
    //         return 'YES';
    //     }
    //     $x1 += $v1;
    //     $x2 += $v2;
    // }
    // return 'NO';

    //Case 3:
    $diffX = $x2 - $x1;
    $diffV = $v1 - $v2;
    if($diffV == 0) return 'NO';
    if($diffX % $diffV == 0 && $diffV >= 0) return 'YES';
    return 'NO';
}
?>