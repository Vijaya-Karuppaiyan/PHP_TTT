<?php
$filename = "data.txt";
$text = "Hello, PHP File Handling!\n";

$file = fopen($filename, "a");
    fwrite($file, $text);
    echo "successfully written";
    fclose($file);
?>
   

