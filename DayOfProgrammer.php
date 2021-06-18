<?php 
function dayOfProgrammer($year) {
    // Write your code here
    if($year == 1918)
        return '26.09.1918'; // 256 - 243 (day of 7 months) + 13 (different day of 2 calender system) = 26
    if(($year % 400 == 0) || (($year % 4 == 0) && !($year % 100 == 0)) || ($year < 1918 && $year % 4 == 0))
        return '12.09.'.$year;
    else return '13.09.'.$year;
}
?>