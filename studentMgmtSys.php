<!DOCTYPE html>
<html>
<head>
    <title>Simple Student Management System</title>
</head>
<body>
    <h2>Student Management System</h2>

    <form method="post">
        <label>Student Name:</label>
        <input type="text" name="name" required><br><br>

        <label>Student Roll No:</label>
        <input type="text" name="roll_no" required><br><br>

        <label>Student Marks:</label>
        <input type="number" name="marks" required><br><br>

        <input type="submit" name="add" value="Add Student">
    </form>

    <hr>

    <?php
    // Define an empty array to store students (Temporary for one refresh only)
    session_start();
    
    if (!isset($_SESSION['students'])) {
        $_SESSION['students'] = array();
    }

    // When form is submitted
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $roll_no = $_POST['roll_no'];
        $marks = $_POST['marks'];

        $student = array(
            'name' => $name,
            'roll_no' => $roll_no,
            'marks' => $marks
        );

        $_SESSION['students'][] = $student;
    }

    // Display the list of students
    if (!empty($_SESSION['students'])) {
        echo "<h3>Student List:</h3>";
        echo "<table border='1' cellpadding='8'>";
        echo "<tr><th>Roll No</th><th>Name</th><th>Marks</th></tr>";

        foreach ($_SESSION['students'] as $stu) {
            echo "<tr>";
            echo "<td>" . $stu['roll_no'] . "</td>";
            echo "<td>" . $stu['name'] . "</td>";
            echo "<td>" . $stu['marks'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
    ?>
</body>
</html>
