<?php
function validateAge($age) {
    if (!is_numeric($age)) {
        throw new Exception("Invalid input: Age must be a number.");
    }

    if ($age <= 0 || $age > 120) {
        throw new Exception("Age is not valid.");
    }

    return "Age is valid.";
}

// Test with different values
try {
    $age = "abc"; // Try with other values like -5, "abc", 130, etc.
    echo validateAge($age);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>

