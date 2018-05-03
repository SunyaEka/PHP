<?php
  $a=10;
  $b=20; 
  $ch=1;
 
   switch($ch) {
    case 1: echo "The sum is:";
      $c=$a+$b;
      echo $c;
     break;
    case 2: echo "The subtraction is:";
      $c=$a-$b;
      echo $c;
     break;
    case 3: echo "The multiplication is:";
      $c=$a*$b;
      echo $c;
     break;
    case 4: echo "The divison is:";
      $c=$a/$b;
      echo $c;
     break;
    }
?>