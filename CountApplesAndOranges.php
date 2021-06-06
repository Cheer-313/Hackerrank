<?php
function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // Write your code here
     // Write your code here
     $result = [];
     $count = 0;
     foreach ($apples as $_apple) {
         # code...
         $position = $a + $_apple;
         if(($position >= $s) && ($position <= $t)){
             $count++;
         }
     }
     $result[] = $count;
 
     $count = 0;
     foreach ($oranges as $_orange) {
         # code...
         $position = $b + $_orange;
         if(($position >= $s) && ($position <= $t)){
             $count++;
         }
     }
     $result[] = $count;
     return $result;
}
?>