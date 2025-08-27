<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Grade Calculator</h1>
    
    <div class="calculator">
        <form method="POST">
            <input type="number" name="num1" placeholder="Quiz Score (30%)" required>
            <input type="number" name="num2" placeholder="Assignment Score (30%)" required>
            <input type="number" name="num3" placeholder="Exam Score (40%)" required>
            <button type="submit">Calculate</button>
        </form>
        
        <?php
            if ($_POST) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $error = "";
                $grade = "";

                // Weighted average
                $result = ($num1 * 0.3) + ($num2 * 0.3) + ($num3 * 0.4);

                if ($result >= 0 && $result <= 100) {
                    if ($result >= 90) {
                        $grade = "A";
                    } elseif ($result >= 80) {
                        $grade = "B";
                    } elseif ($result >= 70) {
                        $grade = "C";
                    } elseif ($result >= 60) {
                        $grade = "D";
                    } else {
                        $grade = "F";
                    }
                } else {
                    $error = "Invalid scores entered.";
                }

                if ($error) {
                    echo "<p class='result' style='color: red;'>$error</p>";
                } else {
                    echo "<p class='result'>Weighted Average: ($num1 * 0.3) + ($num2 * 0.3) + ($num3 * 0.4) = $result";
                    echo "<p class='result'>Final Grade: $result Letter Grade: $grade</p>";
                }
            }
        ?>
    </div>
</body>
</html>