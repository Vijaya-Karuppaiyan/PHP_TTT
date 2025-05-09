<?php
$fptr3= fopen("file.php", "r");
while(($line =fgets($fptr3))!=false)
 {
   echo $line."<br/>";
   } 
fclose($fptr3);
?>