<?php
$fptr = fopen("first.php", "r");
$data = fread($fptr,filesize("first.php"));
echo $data;
fclose($fptr);

$fptr1 =fopen("abc.txt", "w");
$data1 =fwrite($fptr1,"hi Welcome to php file");
fclose($fptr1);
// read data line by line

?>
