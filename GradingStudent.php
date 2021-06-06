<?php
function gradingStudents($grades) {
    // Write your code here
    $result = [];

    foreach ($grades as $_grade) {
        if($_grade % 5 == 0){
            $result[] = $_grade;
        }
        else {
            $diff = (5*(intdiv($_grade,5)+1)) - $_grade;
            // Hieu so cua $_grade va boi so 5 sau no
            if($diff < 3 && $_grade >= 38){
                $_grade += $diff;
                $result[] = $_grade;
            }
            else {
                $result[] = $_grade;
            }
        }
    }
    return $result;

}

$grades = [73,67,38,33];
// $result = intdiv(12,5);
// echo $result;
var_dump(gradingStudents($grades));
?>