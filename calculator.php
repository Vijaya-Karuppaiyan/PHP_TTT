<!DOCTYPE html>
<html>
<head>
    <title>Math Operation</title>
</head>
<body>
    <h2>Simple Calculator</h2>

    <form method="post">
        Enter First Number: <input type="number" name="num1" required><br><br>
        Enter Second Number: <input type="number" name="num2" required><br><br>
        Select Operation:
        <select name="operator" required>
            <option value="+">Addition (+)</option>
            <option value="-">Subtraction (-)</option>
            <option value="*">Multiplication (*)</option>
            <option value="/">Division (/)</option>
            <option value="%">Modulus (%)</option>
        </select><br><br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $result = 0;

        if ($operator == "+") {
            $result = $num1 + $num2;
        } elseif ($operator == "-") {
            $result = $num1 - $num2;
        } elseif ($operator == "*") {
            $result = $num1 * $num2;
        } elseif ($operator == "/") {
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Cannot divide by zero!";
            }
        } elseif ($operator == "%") {
            if ($num2 != 0) {
                $result = $num1 % $num2;
            } else {
                $result = "Cannot find modulus with zero!";
            }
        }

        echo "<h3>Result: $result</h3>";
    }
    ?>
</body>
</html>
