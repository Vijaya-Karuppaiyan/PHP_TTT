<?php
  $str = "Welcome to PHP TTT";
  $len=strlen($str);
  $nov =0;
  echo " The given string :", $str, "<br/>";
  for($i=0; $i<strlen($str); $i++)
  {
    if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u')
    {
      $nov++;
    }
  }
  echo " Number of vowels in the given string : ", $nov, "<br/>";

  echo " The given string in the reverse order: "; 
 $lastindex=-1;
  for($i=0; $i<strlen($str); $i++)
  {
    echo $str[$lastindex];
    $lastindex--;
  }

  
?>