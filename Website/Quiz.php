<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quiz</title>
<link rel="icon" type="image/png" href="img/coding.png">
<link rel="stylesheet" href="css/NavigationBar.css">
<link rel="stylesheet" href="css/Quiz.css">

<style>
    @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

body {
    font-family: 'Barlow Condensed', 'Roboto', sans-serif;
    background: rgb(13,13,13);
    background: linear-gradient(90deg, rgba(13,13,13,1) 0%, rgba(61,61,61,1) 73%, rgba(68,124,105,1) 100%);
    background-repeat: no-repeat;
    background-size: cover; 
    background-attachment: fixed;
    background-position: center;
  }
</style>
</head>
<body onload="NextQuestion(0)">

<!-- Trigger area for hover, positioned at the left corner -->
<div class="hover-trigger"></div>

<!-- Navigation bar (initially hidden) -->
<div class="topnav" id="navbar">
  <img class="logo" src="img/logo2.png" alt="PHP Logo">
  <a href="Home.php">Home</a>
  <a href="Course.php">Courses</a>
  <a class="active" href="Quiz.php">Quizzes</a>
  <a href="SampleProgram.php">Sample Program</a>
  <a href="References.php">References</a>
  <a href="aboutUs.php">About Us</a>
</div>

<div class="titleBackground">
    <div class="title">
        <h1>QUIZ <span class="time">TIME</span></h1>
    </div>
</div>
  <div class="Quiz time">
    <main>
        <!-- creating a modal for when quiz ends -->
        <div class="modal-container" id="score-modal">

            <div class="modal-content-container">

                <h1>Congratulations, Quiz Completed.</h1>

                <div class="grade-details">
                    <p>Attempts : 10</p>
                    <p>Wrong Answers : <span id="wrong-answers"></span></p>
                    <p>Right Answers : <span id="right-answers"></span></p>
                    <p>Grade : <span id="grade-percentage"></span>%</p>
                    <p ><span id="remarks"></span></p>
                </div>

                <div class="modal-button-container">
                    <button onclick="closeScoreModal()">Continue</button>
                </div>

            </div>
        </div>
<!-- end of modal of quiz details-->

        <div class="game-quiz-container">

            <div class="game-details-container">
                <h1>Score : <span id="player-score"></span> / 10 &nbsp; </h1>
                <h1>Question : <span id="question-number"></span> / 10</h1>
            </div>

            <div class="game-question-container">
                <h1 id="display-question"></h1>
            </div>

            <div class="game-options-container">

               <div class="modal-container" id="option-modal">

                    <div class="modal-content-container">
                         <h1>Please Pick An Option</h1>

                         <div class="modal-button-container">
                            <button onclick="closeOptionModal()">Continue</button>
                        </div>

                    </div>

               </div>

                <span>
                    <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                    <label for="option-one" class="option" id="option-one-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                    <label for="option-two" class="option" id="option-two-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                    <label for="option-three" class="option" id="option-three-label"></label>
                </span>


                <span>
                    <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                    <label for="option-four" class="option" id="option-four-label"></label>
                </span>


            </div>

            <div class="next-button-container">
                <button onclick="handleNextQuestion()">Next Question</button>
            </div>

        </div>
  </div>

<script src="js/Quiz.js"></script>
<script src="js/NavigationBar.js"> </script>

<script>
        const questions = [

{
question: "What Does PHP Stand For?",
optionA: "Personal Home Page",
optionB: "Private Hypertext Processor",
optionC: "PHP: Hypertext Preprocessor",
optionD: "Preprocessed Hypertext Processor",
correctOption: "optionC"
},

{
question: "Which symbol is used to start a variable in PHP?",
optionA: "#",
optionB: "$",
optionC: "&",
optionD: "%",
correctOption: "optionB"
},

{
question: "Which Function Is Used To Include A File In PHP?",
optionA: "include_file()",
optionB: "include()",
optionC: "require()",
optionD: "Both B and C",
correctOption: "optionD"
},

{
question: "Which function is used to output text in PHP?",
optionA: "echo",
optionB: "print_text",
optionC: "display",
optionD: "show",
correctOption: "optionA"

},

{
question: "Which Of The Following Is A Valid Variable Name In PHP?",
optionA: "$1name",
optionB: "$name_1",
optionC: "$name-1",
optionD: "$name@1",
correctOption: "optionB"
},

{
question: "What is the correct way to declare a variable in PHP?",
optionA: "var $variableName;",
optionB: "$variableName = value;",
optionC: "int $variableName = value;",
optionD: "declare $variableName;",
correctOption: "optionB"
},

{
question: "How Can You Access The Third Element In An Array Called '$arr'?",
optionA: "$arr[3]",
optionB: "$arr{3}",
optionC: "$arr(3)",
optionD: "$arr[2]",
correctOption: "optionD"
},

{
question: "Which Of The Following Is Used To Connect To A MySQL Database In PHP?",
optionA: "mysqli_connect()",
optionB: "mysql_connect()",
optionC: "connect_mysql()",
optionD: "mysqli_connecting()",
correctOption: "optionA"
},

{
question: "How can you check if a variable is an array in PHP?",
optionA: "is_array($var)",
optionB: "check_array($var)",
optionC: "array_check($var)",
optionD: "is_type($var, 'array')",
correctOption: "optionA"

},

{
question: "What is the purpose of the unset() function in PHP?",
optionA: "To delete a file",
optionB: "To remove a variable",
optionC: "To clear a session",
optionD: "To close a database connection",
correctOption: "optionB"
}

]

let shuffledQuestions = [] //empty array to hold shuffled selected questions out of all available questions

function handleQuestions() { 
//function to shuffle and push 10 questions to shuffledQuestions array
//app would be dealing with 10questions per session
while (shuffledQuestions.length <= 9) {
    const random = questions[Math.floor(Math.random() * questions.length)]
    if (!shuffledQuestions.includes(random)) {
        shuffledQuestions.push(random)
    }
}
}


let questionNumber = 1 //holds the current question number
let playerScore = 0  //holds the player score
let wrongAttempt = 0 //amount of wrong answers picked by player
let indexNumber = 0 //will be used in displaying next question

// function for displaying next question in the array to dom
//also handles displaying players and quiz information to dom
function NextQuestion(index) {
handleQuestions()
const currentQuestion = shuffledQuestions[index]
document.getElementById("question-number").innerHTML = questionNumber
document.getElementById("player-score").innerHTML = playerScore
document.getElementById("display-question").innerHTML = currentQuestion.question;
document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;

}


function checkForAnswer() {
const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
let correctOption = null

options.forEach((option) => {
    if (option.value === currentQuestionAnswer) {
        
        correctOption = option.labels[0].id
    }
})

if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
    document.getElementById('option-modal').style.display = "flex"
}

options.forEach((option) => {
    if (option.checked === true && option.value === currentQuestionAnswer) {
        document.getElementById(correctOption).style.backgroundColor = "green"
        playerScore++ 
        indexNumber++ 

        setTimeout(() => {
            questionNumber++
        }, 1000)
    }

    else if (option.checked && option.value !== currentQuestionAnswer) {
        const wrongLabelId = option.labels[0].id
        document.getElementById(wrongLabelId).style.backgroundColor = "red"
        document.getElementById(correctOption).style.backgroundColor = "green"
        wrongAttempt++ 
        indexNumber++

        setTimeout(() => {
            questionNumber++
        }, 1000)
    }
})
}


function handleNextQuestion() {
checkForAnswer() 
unCheckRadioButtons()

setTimeout(() => {
    if (indexNumber <= 9) {

        NextQuestion(indexNumber)
    }
    else {
        handleEndGame()
    }
    resetOptionBackground()
}, 1000);
}

function resetOptionBackground() {
const options = document.getElementsByName("option");
options.forEach((option) => {
    document.getElementById(option.labels[0].id).style.backgroundColor = ""
})
}

function unCheckRadioButtons() {
const options = document.getElementsByName("option");
for (let i = 0; i < options.length; i++) {
    options[i].checked = false;
}
}

function handleEndGame() {
let remark = null
let remarkColor = null

if (playerScore <= 3) {
    remark = "Bad Grades, Keep Practicing."
    remarkColor = "red"
}
else if (playerScore >= 4 && playerScore < 7) {
    remark = "Average Grades, You can do better."
    remarkColor = "orange"
}
else if (playerScore >= 7) {
    remark = "Excellent, Keep the good work going."
    remarkColor = "green"
}
const playerGrade = (playerScore / 10) * 100


document.getElementById('remarks').innerHTML = remark
document.getElementById('remarks').style.color = remarkColor
document.getElementById('grade-percentage').innerHTML = playerGrade
document.getElementById('wrong-answers').innerHTML = wrongAttempt
document.getElementById('right-answers').innerHTML = playerScore
document.getElementById('score-modal').style.display = "flex"

}

function closeScoreModal() {
questionNumber = 1
playerScore = 0
wrongAttempt = 0
indexNumber = 0
shuffledQuestions = []
NextQuestion(indexNumber)
document.getElementById('score-modal').style.display = "none"
}

function closeOptionModal() {
document.getElementById('option-modal').style.display = "none"
}
</script>
</body>
</html>
