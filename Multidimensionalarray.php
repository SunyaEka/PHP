<?php
 echo "Multi dimensional array","</br>";
 $mobile= array (
 array("Lenovo : ",50,50),
 array("Samsung : ",80,20),
 array("Xioami : ",100,0),
 array("Moto : ",10,90),
 array("Vivo : ",5,95),
 array("LeTv : ",2,98)
 );
 echo $mobile [0][0]. "SOLD :". $mobile [0][1]. "IN STOCK :" .$mobile[0][2]."</br>";
 echo $mobile [1][0]. "SOLD :". $mobile [1][1]. "IN STOCK :" .$mobile[1][2]."</br>";
 echo $mobile [2][0]. "SOLD :". $mobile [2][1]. "IN STOCK :" .$mobile[2][2]."</br>";
 echo $mobile [3][0]. "SOLD :". $mobile [3][1]. "IN STOCK :" .$mobile[3][2]."</br>";
 echo $mobile [4][0]. "SOLD :". $mobile [4][1]. "IN STOCK :" .$mobile[4][2]."</br>";
 echo $mobile [5][0]. "SOLD :". $mobile [5][1]. "IN STOCK :" .$mobile[5][2]."</br>";
 ?>