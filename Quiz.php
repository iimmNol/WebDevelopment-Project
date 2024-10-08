<?php
$questions = [
    [
        "question" => "What does PHP stand for?",
        "options" => ["Personal Home Page", "PHP: Hypertext Preprocessor", "Private Home Page", "None of the above"],
        "answer" => 1
    ],
    [
        "question" => "Which of the following is a correct way to create a function in PHP?",
        "options" => ["function myFunction()", "create myFunction()", "def myFunction()", "None of the above"],
        "answer" => 0
    ],
    [
        "question" => "Which symbol is used for comments in PHP?",
        "options" => ["//", "#", "/*", "All of the above"],
        "answer" => 3
    ],
    [
        "question" => "How do you declare a variable in PHP?",
        "options" => ["$ varible ", "var ", "declare var ", "None of the above"],
        "answer" => 0

    ],
    [
        "question" => "Which PHP function is used to send headers?",
        "options" => ["header()", "send_headers()", "set_headers()", "None of the above"],
        "answer" => 0
    ]
];

$score = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($questions as $index => $question) {
        if (isset($_POST['question' . $index]) && $_POST['question' . $index] == $question['answer']) {
            $score++;
        }
    }
    echo "<h2>Your Score: $score out of " . count($questions) . "</h2>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Quiz</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .question {
            margin-bottom: 15px;
        }
        .options {
            margin: 5px 0;
        }
        button {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>PHP Quiz</h1>
<form method="post">
    <?php foreach ($questions as $index => $question): ?>
        <div class="question">
            <h3><?php echo ($index + 1) . '. ' . htmlspecialchars($question['question']); ?></h3>
            <?php foreach ($question['options'] as $key => $option): ?>
                <div class="options">
                    <label>
                        <input type="radio" name="question<?php echo $index; ?>" value="<?php echo $key; ?>">
                        <?php echo htmlspecialchars($option); ?>
                    </label>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
    <button type="submit">Submit</button>
</form>

</body>
</html>
