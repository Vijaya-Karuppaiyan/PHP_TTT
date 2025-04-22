<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Even Or Odd</title>
</head>
<body>
<h2>Check Whether a Number is Even or Odd</h2>

<?php
// Assign a number directly
$number = 37;

echo "Given number: " . $number . "<br><br>";

// Check even or odd
if ($number % 2 == 0) {
    echo "$number is an Even number.";
} else {
    echo "$number is an Odd number.";
}
?>
</body>
</html>