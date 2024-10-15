<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Introduction</title>
    <link rel="icon" type="image/png" href="img/coding.png">
    <link rel="stylesheet" href="css/NavigationBar.css">
    <link rel="stylesheet" href="css/Introduction.css">
    <link rel="stylesheet" href="css/backandfrontbutton.css">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

body {
    font-family: 'Barlow Condensed', 'Roboto', sans-serif;
    font-weight: 400; /* You can adjust the font weight as needed */
    color: #fff; /* This will keep the text color consistent with your dark background */
    background-color: #000; /* Ensure the dark background complements the design */
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
    </style>
</head>
    <body>      
        <!-- Trigger area for hover, positioned at the left corner -->
<div class="hover-trigger"></div>

<!-- Navigation bar (initially hidden) -->
<div class="topnav" id="navbar">
  <img class="logo" src="img/logo2.png" alt="PHP Logo">
  <a href="Home.php">Home</a>
  <a class="active" href="Course.php">Courses</a>
  <a href="Quiz.php">Quizzes</a>
  <a href="SampleProgram.php">Sample Program</a>
  <a href="References.php">References</a>
  <a href="aboutUs.php">About Us</a>
</div>  
    
<div class="back2">
        <a href="Course.php">
            <button class="back">← BACK</button> 
        </a>
    </div>
<div class="center">
        <img class="logo2" src="img/logo2.png" alt="logo">
        <div class="head">
            <div class="header">
                <h1>INTRODUCTION <br>TO PHP</h1>
            </div>
        </div>
        <div class="content">
            <div class="left">
                <p class="introContext">PHP (PHP: Hypertext Preprocessor) is a widely used open-source scripting language, specifically designed for web development. It significantly enhances the capabilities of HTML, particularly when integrated with database query languages like MySQL.</p>
            </div>

            <div class="left">
                <img src="img/php.png" alt="php">
                <p class="introContext2">
                    PHP code within HTML. A special program known as the PHP interpreter processes these PHP insertions, enabling the creation of web pages that adapt to user input or data. PHP scripts are executed on the server, and PHP files can include various elements such as HTML, CSS, JavaScript, text, MySQL, and PHP code itself, with a ".php" file extension.
                </p>
            </div>
                <div class="left">
                    <div class="WhyPHP">
                        <h3>WHY PHP?</h3>
                        <ul>
                            <li>PHP can be executed on different platforms like Windows, Linux, and Mac OS.</li>
                            <li>PHP is free and can run on different web browsers.</li>
                            <li>PHP is simple to understand and it supports wide-range databases.</li>
                            <li>PHP can create both static and dynamic web pages.</li>
                            <li>PHP runs efficiently on the server side.</li>
                            <li>You have the choice of using procedural programming or object-oriented programming (OOP), or a mixture of both.</li>
                            <li>PHP's abilities include outputting images and PDF files.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="next2">
            <a href="BasicSyntax.php">
                <button class="next">NEXT →</button> 
            </a>
            </div>
        <script src="js/NavigationBar.js"></script>
    </body>
</html>