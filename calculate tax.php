<?php
 $an_salary=500000;
 function cal_tax($x) {
     if ($x<=250000) {
         echo "NO TAX";
     }
    elseif ($x>250000 && $x<=500000) {
         echo "TAX RATE : 5%","</br>";
         echo ($x*5)/100;
     }
    elseif ($x>500000 && $x<=1000000) {
         echo "TAX RATE : 20%","</br>";
         echo ($x*20)/100;
     }
    elseif ($x>100000) {
         echo "TAX RATE : 30%","</br>";
	 echo ($x*30)/100;
     }
 }
 echo cal_tax($an_salary);
?>