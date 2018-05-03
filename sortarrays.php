<?php
 $numbers = array (2,45,3,76,34,65);
 $cars = array ("TOYOTA","BMW","PORSCHE","FERARI","BUGATI","MUSTANG");
 sort($numbers);
 sort($cars);
 for($i=0;$i<5;$i++) {
     echo $numbers[$i],"</br>";
 }
  for($i=0;$i<5;$i++) {
     echo $cars[$i];
     echo "</br>";
 }
?>