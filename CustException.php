<?php
class CustomException extends Exception
{
    function getError()
    {
        return $this->getMessage().$this->getFile().$this->getLine();
    }
}

function validateAge($age) {
    if (!is_numeric($age)) {
        throw new CustomException("Invalid input: Age must be a number.");
    }

    if ($age <= 0 || $age > 120) {
        throw new CustomException("Age is not valid.");
    }

    return "Age is valid.";
}

// Test with different values
try {
    $age = 0; // Try with other values like -5, "abc", 130, etc.
    echo validateAge($age);
} catch (CustomException $e) {
    echo "Error: " . $e->getError();
}
?>

