<!DOCTYPE html>
<html>
<head>
    <title>Currency Breakdown</title>
</head>
<body>
    <h2>Find Number of 100s, 50s, and 10s in a 4-digit Number</h2>

    <?php
    // Assign a 4-digit number directly
    $amount = 2740;

    echo "Given amount: ₹" . $amount . "<br><br>";

    // Calculate number of 100s
    $hundreds = (int)($amount / 100);
    $amount = $amount % 100;

    // Calculate number of 50s
    $fifties = (int)($amount / 50);
    $amount = $amount % 50;

    // Calculate number of 10s
    $tens = (int)($amount / 10);
    $amount = $amount % 10;


    echo "Number of 100s: " . $hundreds . "<br>";
    echo "Number of 50s: " . $fifties . "<br>";
    echo "Number of 10s: " . $tens . "<br>";
    echo "Remaining amount: " . $amount . "<br>";
    ?>

</body>
</html>
