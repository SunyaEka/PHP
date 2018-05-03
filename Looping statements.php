<?php
 $a=1;
 $b=0;
 $e=2;
 for($i=1; $i<=10; $i++)
  {
   $a=$a+$i;
   }
   echo "The sum of ten number using for loop is:",$a,"<br>";
   echo "List of 1st 20 numbers using while loop:","<br>";
 while($i<=20)
  {
   $b=$b+1;
   echo $b,"<br>"; 
   $i++;
  }
   echo "Displaying number using do while loop:","</br>";
 $i=1;
do
  {
   
   $i++;
  }while($i<10);
   echo("Loop stopped at i=$i");

?>