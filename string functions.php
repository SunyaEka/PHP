<?php
  $str= "Hey there watsup?";
  echo $str,"</br>";
  echo "String length is:";
  echo strlen($str),"</br>";
  $string=array(
   "Hey watsup bro?",
   "I don't drive",
   "Its not a car" 
 );
  $search=array(
   "watsup",
   "don't",
   "not" 
 );
  $replace=array(
   "howz you",
   "love to",
   "awesome" 
 );
 $replaced=str_replace($search,$replace,$string);
  print_r($replaced);
  $awesome="Super awesome!";

//int strpos(string haystack, string needlem int [offset]);

  $result=strpos($awesome,'m',3);
   if($result==false) {
    echo 'Not found';
  }else{
    echo "</br>",'Found at position'.$result;
  }
 ?>