<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Grade Calculator</h1>
    
    <div class="calculator"> <!--sya ang nag hohold sa form para mas madali din mag design-->
        <form method="POST"> <!-- sya ung maiistore ng mga ininput na data and ipapadala nya sa php para magawa ung funtion-->
            <input type="number" name="num1" placeholder="Quiz Score (30%)" required> <!--sya mag rerequired na mag input ng value-->
            <input type="number" name="num2" placeholder="Assignment Score (30%)" required> <!--sya mag rerequired na mag input ng value-->
            <input type="number" name="num3" placeholder="Exam Score (40%)" required> <!--sya mag rerequired na mag input ng value-->
            <button type="submit">Calculate</button> <!--eto naman ung pipindutin na button para mag compute na-->
        </form>
        
        <?php
            if ($_POST) {
                $num1 = $_POST['num1']; // <--- Dito naiistore ung ininput na value ng quiz
                $num2 = $_POST['num2']; // <--- Dito naiistore ung ininput na value ng Assignment
                $num3 = $_POST['num3']; // <--- Dito naiistore ung ininput na value ng Exam
                $error = ""; // <--- dito naka istore ung error message kapag mali ung ininput ng user
                $grade = ""; // <--- sya ung mag lalabas ng Desisyon about sa grade after ma compute

                // Weighted average
                $result = ($num1 * 0.3) + ($num2 * 0.3) + ($num3 * 0.4); // <---- dito naman magcocompute ng grade after mag input ng user

                if ($result >= 0 && $result <= 100) { // <--- sya ung magchecheck if valid paba ung ini-input ng user kung pasok paba sa 0-100
                    if ($result >= 90) { // <--- etong whole part ng if else naman ung mag aassign ng Letter Grade na makukuha ng user base sa results
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
                    $error = "Invalid scores entered."; // <--- eto naman ung error message ng lalabas if hindi valid iniput ni user
                }

                if ($error) { // <--- sya mag checheck if need ba mag print ng error message kapag di valid ung input
                    echo "<p class='result' style='color: red;'>$error</p>"; // <---- dito naman lalabas ung error message kapag mali na input ni user
                } else {
                    echo "<p class='result'>Weighted Average: ($num1 * 0.3) + ($num2 * 0.3) + ($num3 * 0.4) = $result"; // <--- eto na ung dalawang output nalalabas makikita dito kung pano kinumpute at anong results tsaka Letter grade
                    echo "<p class='result'>Final Grade: $result Letter Grade: $grade</p>";
                }
            }
        ?>
    </div>
</body>
</html>