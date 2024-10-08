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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #333;
            color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            width: 350px;
            padding: 20px;
            background-color: #000;
            border-radius: 10px;
        }

        .display {
            width: 100%;
            height: 60px;
            background-color: #000;
            border: none;
            text-align: right;
            font-size: 2em;
            padding: 10px;
            color: #fff;
            margin-bottom: 10px;
        }

        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            grid-gap: 5px;
        }

        .button {
            height: 50px;
            font-size: 1.2em;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            background-color: #505050;
            color: #fff;
        }

        .button.operator {
            background-color: #f39c12;
        }

        .button.equal {
            background-color: #f39c12;
            grid-column: span 2;
        }

        .button.zero {
            grid-column: span 2;
        }

        .back-container {
            margin-top: 20px;
        }

        .button.back {
            background-color: #f39c12;
            font-size: 1.2em;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            border: none;
        }
    </style>
    <script>
        function updateDisplay(value) {
            const display = document.querySelector('.display');
            if (display.value === '0' || display.value === 'Error') {
                display.value = value;
            } else {
                display.value += value;
            }
        }

        function clearDisplay() {
            document.querySelector('.display').value = '0';
        }

        function toggleSign() {
            const display = document.querySelector('.display');
            if (display.value !== '0') {
                display.value = String(-parseFloat(display.value));
            }
        }

        function calculatePercentage() {
            const display = document.querySelector('.display');
            display.value = String(parseFloat(display.value) / 100);
        }

        function submitForm(operator = null) {
            if (operator) {
                document.querySelector('input[name="button"]').value = operator;
            }
            document.querySelector('form').submit();
        }

        function goBackToHomePage() {
            window.location.href = 'Web.php'; // Adjust this path if needed BAKA MABAGO YUNG PATH OR MARENAME TAKE NOTE!
        }
    </script>
</head>
<body>
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
        <button type="button" class="button back" onclick="goBackToHomePage()">Back</button>
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
</body>
</html>
