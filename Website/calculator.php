<?php
session_start();

$display = isset($_POST['display']) ? $_POST['display'] : '0';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scientific Calculator</title>
    <link rel="icon" type="image/png" href="img/coding.png">
    <link rel="stylesheet" href="css/NavigationBar.css">
    <link rel="stylesheet" href="css/calculator.css">
</head>
<body>

        <!-- Trigger area for hover, positioned at the left corner -->
        <div class="hover-trigger"></div>

<!-- Navigation bar (initially hidden) -->
<div class="topnav" id="navbar">
  <img class="logo" src="img/logo2.png" alt="PHP Logo">
  <a href="Home.php">Home</a>
  <a href="Course.php">Courses</a>
  <a href="Quiz.php">Quizzes</a>
  <a class="active" href="SampleProgram.php">Sample Program</a>
  <a href="References.php">References</a>
  <a href="aboutUs.php">About Us</a>
</div>  

    <div class="topnav">
        <img class="logo" src="img/logo2.png" alt="PHP Logo">
            <a href="Home.php">Home</a>
            <a href="Course.php">Courses</a>
            <a href="Quiz.php">Quizzes</a>
            <a class="active" href="SampleProgram.php">Sample Program</a>
            <a href="References.php">References</a>
            <a href="aboutUs.php">About Us</a>
        </div>

    <div class="calculator">
        <form action="" method="post">
            <input type="text" class="display" name="display" value="<?php echo isset($_POST['display']) ? $_POST['display'] : '0'; ?>" readonly>
            <input type="hidden" name="button" value="">

            <div class="buttons">
                <button type="button" class="button" onclick="clearDisplay()">AC</button>
                <button type="button" class="button" onclick="toggleSign()">±</button>
                <button type="button" class="button" onclick="calculatePercentage()">%</button>
                <button type="button" class="button operator" onclick="submitForm('/')">÷</button>

                <button type="button" class="button" onclick="updateDisplay('7')">7</button>
                <button type="button" class="button" onclick="updateDisplay('8')">8</button>
                <button type="button" class="button" onclick="updateDisplay('9')">9</button>
                <button type="button" class="button operator" onclick="submitForm('*')">*</button>

                <button type="button" class="button" onclick="updateDisplay('4')">4</button>
                <button type="button" class="button" onclick="updateDisplay('5')">5</button>
                <button type="button" class="button" onclick="updateDisplay('6')">6</button>
                <button type="button" class="button operator" onclick="submitForm('-')">-</button>

                <button type="button" class="button" onclick="updateDisplay('1')">1</button>
                <button type="button" class="button" onclick="updateDisplay('2')">2</button>
                <button type="button" class="button" onclick="updateDisplay('3')">3</button>
                <button type="button" class="button operator" onclick="submitForm('+')">+</button>

                <button type="button" class="button zero" onclick="updateDisplay('0')">0</button>
                <button type="button" class="button" onclick="updateDisplay('.')">.</button>
                <button type="button" class="button equal" onclick="submitForm('=')">=</button>

                <button type="button" class="button operator" onclick="submitForm('sqrt')">√</button>
                <button type="button" class="button operator" onclick="submitForm('^')">^</button>
                <button type="button" class="button operator" onclick="submitForm('sin')">sin</button>
                <button type="button" class="button operator" onclick="submitForm('cos')">cos</button>
                <button type="button" class="button operator" onclick="submitForm('tan')">tan</button>
                <button type="button" class="button operator" onclick="submitForm('log')">log</button>
            </div>
        </form>
    </div>

    <div class="back-container">
        <button type="button" class="button back" onclick="goBackToSampleProgram()">Back</button>
    </div>

    <?php
    if (!isset($_SESSION['inputs'])) {
        $_SESSION['inputs'] = [];
        $_SESSION['operator'] = '';
    }

    if (isset($_POST['button'])) {
        $button = $_POST['button'];
        $display = isset($_POST['display']) ? $_POST['display'] : '0';

        if ($button === '=') {
            if (!empty($_SESSION['inputs'])) {
                $_SESSION['inputs'][] = $display;
                $result = array_shift($_SESSION['inputs']);
                while (!empty($_SESSION['inputs'])) {
                    $operator = array_shift($_SESSION['inputs']);
                    $nextInput = array_shift($_SESSION['inputs']);
                    switch ($operator) {
                        case '+':
                            $result += $nextInput;
                            break;
                        case '-':
                            $result -= $nextInput;
                            break;
                        case '*':
                            $result *= $nextInput;
                            break;
                        case '/':
                            $result = ($nextInput != 0) ? $result / $nextInput : 'Error';
                            break;
                        case '^':
                            $result = pow($result, $nextInput);
                            break;
                    }
                }
                $display = $result;
                $_SESSION['inputs'] = [];
            }
        } elseif (in_array($button, ['sqrt', 'sin', 'cos', 'tan', 'log'])) {
            $display = calculateScientificFunction($button, $display);
        } elseif (in_array($button, ['+', '-', '*', '/', '^'])) {
            $_SESSION['inputs'][] = $display;
            $_SESSION['inputs'][] = $button;
            $display = '0';
        }
    }

    function calculateScientificFunction($func, $number) {
        if ($number == 0 && in_array($func, ['log', 'tan'])) {
            return 'Error'; 
        }
        switch ($func) {
            case 'sqrt':
                return $number >= 0 ? sqrt($number) : 'Error';
            case 'sin':
                return sin(deg2rad($number));
            case 'cos':
                return cos(deg2rad($number));
            case 'tan':
                return tan(deg2rad($number));
            case 'log':
                return $number > 0 ? log10($number) : 'Error';
            default:
                return 'Error';
        }
    }

    echo "<script>document.querySelector('.display').value = '$display';</script>";
    ?>

    <script src="js/NavigationBar.js"></script>
    <script src="js/calculator.js"></script>
</body>
</html>