<!DOCTYPE html>
<html>
<head>
  <title>Courses</title>
  <link rel="icon" type="image/png" href="img/coding.png">
  <link rel="stylesheet" href="css/NavigationBar.css">
  <link rel="stylesheet" href="css/Course.css">

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
<div class="MainContainer">
  <div class="container">
    <h1>COURSES</h1>

    <div class="test-yourself">
    <a href="https://www.programiz.com/php/online-compiler/">
      <button class="test">Test Yourself →</button>
    </a>
    </div>

    <div class="course-grid">
      <div class="course-card">
        <img src="img/Introduction.jpg" alt="Introduction to PHP"> 
          <h3>Introduction to PHP</h3>

          <label class="switch">
            <input type="checkbox" id="toggleSwitch" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      </div>

      <div class="course-card">
        <img src="img/BasicSyntax.png" alt="PHP Basic Syntax">
        <h3>PHP Basic Syntax</h3>

        <label class="switch">
            <input type="checkbox" id="toggleSwitch2" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      </div>

      <div class="course-card">
        <img src="img/Conditional.png" alt="Conditional and Looping Statement">
        <h3>Condition and Loop Statement</h3>
        <label class="switch">
            <input type="checkbox" id="toggleSwitch3" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      </div>

      <div class="course-card">
        <img src="img/Arrays.webp" alt="Arrays and Superglobals">
        <h3>Arrays and Superglobals</h3>
        <label class="switch">
            <input type="checkbox" id="toggleSwitch4" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      </div>

      <div class="course-card">
        <img src="img/Classes.jfif" alt="Classes, Objects, and Forms">
        <h3>Classes, Objects, and Forms</h3>
        <label class="switch">
            <input type="checkbox" id="toggleSwitch5" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      </div>

      <div class="course-card">
        <img src="img/sql.png" alt="MySQL">
        <h3>MySQL</h3>
        <label class="switch">
            <input type="checkbox" id="toggleSwitch6" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      <script src="js/Course.js"></script>
      <script src="js/NavigationBar.js"></script>
      </div>
    </div>
  </div>
</div>
</body>
</html>
