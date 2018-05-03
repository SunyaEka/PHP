<?php
 function inc_by_value($y) {
     $y++;
     echo $y,"</br>";
 }
 function inc_by_reference(&$y) {
     $y++;
     echo $y,"</br>";
 }
 $x=1;
 inc_by_value($x);
 echo $x,"</br>";
 inc_by_reference($x);
 echo $x,"</br>";
?>