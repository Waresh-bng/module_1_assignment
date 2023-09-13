<!DOCTYPE html>
<html>

<head>
    <title>Grade Calculator</title>
</head>

<body>
    <h1>Grade Calculator</h1>
    <form method="post" action="">
        <label for="">Test Score 1:</label>
        <input type="number" placeholder="Test Score 1" name="score1" required><br><br>

        <label for="">Test Score 2:</label>
        <input type="number" placeholder="Test Score 2" name="score2" required><br><br>

        <label for="">Test Score 3:</label>
        <input type="number" placeholder="Test Score 3" name="score3" required><br><br>

        <input type="submit" name="calculate1" value="result"><br><br>
    </form>

    <?php
    if (isset($_POST['calculate1'])) {
        // Get the test scores from the form
        $score1 = $_POST['score1'];
        $score2 = $_POST['score2'];
        $score3 = $_POST['score3'];

        // Calculate the average
        $average = ($score1 + $score2 + $score3) / 3;

        // Determine the letter grade
        if ($average >= 90) {
            $grade = 'A';
        } elseif ($average >= 80) {
            $grade = 'B';
        } elseif ($average >= 70) {
            $grade = 'C';
        } elseif ($average >= 60) {
            $grade = 'D';
        } else {
            $grade = 'F';
        }

        // Display the result
        echo "<h2>Result:</h2>";
        echo "<p>Average Score: $average</p>";
        echo "<p>Letter Grade: $grade</p>";
    }
    ?>
</body>

</html>