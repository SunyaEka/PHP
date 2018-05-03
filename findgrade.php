<?php
 $a=array (80,75,60,82,90);
 function grade_cal($calculate) {
     for($i=0;$i<5;$i++) {
         if($calculate[$i]>=90) {
             echo "A","</br>";
         }
         elseif($calculate[$i]>=80)  {
             echo "B","</br>";
         }
         elseif($calculate[$i]<=35) {
             echo "FAIL","</br>";
         }
         else  {
             echo "C","</br>";
         }
     }
 }
 grade_cal($a);
 ?>