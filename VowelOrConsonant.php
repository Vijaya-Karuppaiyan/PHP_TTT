<!DOCTYPE html>
<html>
<head>
    <title>Vowel or Consonant</title>
</head>
<body>
    <h2>Check Whether a Character is Vowel or Consonant</h2>

    <?php
    // Assign a character
    $ch = 'E';

    // Convert to lowercase for simplicity
    $char = strtolower($ch);

    echo "Given Character: " . $ch . "<br><br>";

    switch ($char) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
            echo "$ch is a Vowel.";
            break;
        default:
            echo "$ch is a Consonant.";
           
    }
    ?>

</body>
</html>
