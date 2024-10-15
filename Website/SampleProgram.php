<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sample Program</title>
<link rel="icon" type="image/png" href="img/coding.png">
<link rel="stylesheet" href="css/NavigationBar.css">
<link rel="stylesheet" href="css/SampleProgram.css">

<style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

body {
    font-family: 'Barlow Condensed', 'Roboto', sans-serif;
    font-weight: 400; /* You can adjust the font weight as needed */
    color: #fff; /* This will keep the text color consistent with your dark background */
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
  <a href="Course.php">Courses</a>
  <a href="Quiz.php">Quizzes</a>
  <a class="active" href="SampleProgram.php">Sample Program</a>
  <a href="References.php">References</a>
  <a href="aboutUs.php">About Us</a>
</div>
<div class="center">
<div class="title">
  <h1>Sample Program</h1>
</div>

<div class="calculator">
  <a href="calculator.php">
    <img class="calcu" src="img/calculator.png" alt="calculator">
  </a>
  <h1 class="name">CALCULATOR</h1>
  
  <a href="calculator.php">
    <button class="button">TRY IT →</button>
  </a>
</div>
</div>
<script src="js/NavigationBar.js"></script>
</body>
</html>
