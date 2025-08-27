<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .calculator { border: 2px solid #ccc; padding: 20px; width: 300px; }
        input, select, button { margin: 5px; padding: 5px; }
        .result { font-weight: bold; color: #333; }
    </style>
</head>
<body>
    <h1>Simple Calculator</h1>
    
    <div class="calculator">
        <form method="POST">
            <input type="number" name="num1" placeholder="Quiz Score" required>
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="num2" placeholder="Assignment Score" required>
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="num2" placeholder="Exam Score" required>
            <button type="submit">Calculate</button>
        </form>
        
        <?php
            if ($_POST) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $operation = $_POST['operation'];
                $result = 0;
                $error = "";
                
                switch ($operation) {
                    case '+':
                        $result = ($num1 * 0.3) + ($num2 * 0.3) + ($num3 * 0.4);
                        break;
                    case '-':
                        $result = ($num1 * 0.3) - ($num2 * 0.3) - ($num3 * 0.4);
                        break;
                    case '*':
                        $result = ($num1 * 0.3) * ($num2 * 0.3) * ($num3 * 0.4);
                        break;
                    case '/':
                        if ($num2 != 0 && $num3 != 0) {
                            $result = ($num1 * 0.3) / ($num2 * 0.3) / ($num3 * 0.4);
                        } else {
                            $error = "Cannot divide by zero!";
                        }
                        break;
                }
                
                if ($error) {
                    echo "<p class='result' style='color: red;'>$error</p>";
                } else {
                    echo "<p class='result'>Result: $num1 $operation $num2 $operation $num3 = $result</p>";
                }
            }
        ?>
    </div>
</body>
</html>