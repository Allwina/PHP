<?php
  
  $str="Allwina  is loving you";
  echo $str;
  $len=strlen($str);
  echo "<br>The length of string is ".$len." .Thanks<br>";
  echo $len;
  echo "<br>The number of words in this string is ".str_word_count($str);
  echo "<br>The reverse string is ".strrev($str);
  echo "<br>The search for is in this string is  ".strpos($str,"is");
  echo "<br>The replaced  string is  ".str_replace("is","at",$str);
?>