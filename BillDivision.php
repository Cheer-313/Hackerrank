<?php
function bonAppetit($bill, $k, $b) {
    // Write your code here
    $total_bill = 0;
    foreach ($bill as $key => $value) {
        # code...
        $total_bill += $value;
    } 
    // Can use $total_bill = array_sum($bill) to calculate
    $b_anna = intdiv($total_bill - $bill[$k],2);
    if($b - $b_anna == 0)
        echo 'Bon Appetit';
    else echo $b - $b_anna;
    return;
}
?>