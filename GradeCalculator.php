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
            <input type="number" name="Quiz" placeholder="Quiz" required>
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="Assignment" placeholder="Assignment" required>
            <select name="operation">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">×</option>
                <option value="/">÷</option>
            </select>
            <input type="number" name="Exam" placeholder="Exam" required>
            <button type="submit">Calculate</button>
        </form>
        
        <?php
            if ($_POST) {
                $Quiz = $_POST['Quiz'];
                $Assignment = $_POST['Assignment'];
                $Exam = $_POST['Exam'];
                $operation = $_POST['operation'];
                $result = 0;
                $error = "";
                
                switch ($operation) {
                    case '+':
                        $result = ($Quiz * 0.3) + ($Assignment * 0.3) + ($Exam * 0.4);
                        break;
                    case '-':
                        $result = ($Quiz * 0.3) - ($Assignment * 0.3) - ($Exam * 0.4) ;
                        break;
                    case '*':
                        $result = ($Quiz * 0.3) * ($Assignment * 0.3) * ($Exam * 0.4);
                        break;
                    case '/':
                        if ($Assignment != 0 && $Exam != 0) {
                            $result = ($Quiz * 0.3) / ($Assignment * 0.3) / ($Exam * 0.4);
                        } 
                        else {
                            $error = "Cannot divide by zero!";
                        }
                        break;
                }
                
                if ($error) {
                    echo "<p class='result' style='color: red;'>$error</p>";
                } else {
                    echo "<p class='result'>Result: $Quiz $operation $Assignment $operation $Exam = $result</p>";
                }
            }
        ?>
    </div>
</body>
</html>