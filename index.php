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
            <input type="number" name="num1" placeholder="First number" required>
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="num2" placeholder="Second number" required>
            <button type="submit">Calculate</button>
        </form>
        
        <?php
            if ($_POST) {
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];
                $result = 0;
                $error = "";
                
                switch ($operation) {
                    case '+':
                        $result = $num1 + $num2;
                        break;
                    case '-':
                        $result = $num1 - $num2;
                        break;
                    case '*':
                        $result = $num1 * $num2;
                        break;
                    case '/':
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            $error = "Cannot divide by zero!";
                        }
                        break;
                }
                
                if ($error) {
                    echo "<p class='result' style='color: red;'>$error</p>";
                } else {
                    echo "<p class='result'>Result: $num1 $operation $num2 = $result</p>";
                }
            }
        ?>
    </div>
</body>
</html>