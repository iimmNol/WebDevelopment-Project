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

function goBackToSampleProgram() {
    window.location.href = 'SampleProgram.php'; // Adjust this path if needed BAKA MABAGO YUNG PATH OR MARENAME TAKE NOTE!
}