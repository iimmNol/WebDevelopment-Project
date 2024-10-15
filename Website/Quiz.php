<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Quiz</title>
<link rel="icon" type="image/png" href="img/coding.png">
<link rel="stylesheet" href="css/NavigationBar.css">
<link rel="stylesheet" href="css/Quiz.css">
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
                <h1>Score : <span id="player-score"></span> / 10 </h1>
                <h1> Question : <span id="question-number"></span> / 10</h1>
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
</body>
</html>
