<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>loop</title>
</head>
<body>
<h2>Sum of All Odd Numbers Between Two Numbers</h2>

<?php
$start = 10;
$end = 30;
$sum = 0;

echo "Odd numbers between $start and $end are: <br>";

for ($i = $start; $i <= $end; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
        $sum += $i;
    }
}
echo "<br><br>Sum of all odd numbers between $start and $end is: $sum";
?>
</body>
</html>