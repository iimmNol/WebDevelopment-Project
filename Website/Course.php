<!DOCTYPE html>
<html>
<head>
  <title>Courses</title>
  <link rel="icon" type="image/png" href="img/coding.png">
  <link rel="stylesheet" href="css/NavigationBar.css">
  <link rel="stylesheet" href="css/Course.css">
<style></style>
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
        <a href="Introduction.php">
          <img src="img/Introduction.jpg" alt="Introduction to PHP"> 
        </a>

        <a href="Introduction.php">
          <h3>Introduction to PHP</h3>
        </a>

          <label class="switch">
            <input type="checkbox" id="toggleSwitch" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      </div>

      <div class="course-card">
        <a href="BasicSyntax.php">
        <img src="img/BasicSyntax.png" alt="PHP Basic Syntax">
        </a>

        <a href="BasicSyntax.php">
          <h3>PHP Basic Syntax</h3>
        </a>
        
        <label class="switch">
            <input type="checkbox" id="toggleSwitch2" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      </div>

      <div class="course-card">
        <a href="Condition.php">
          <img src="img/Conditional.png" alt="Conditional and Looping Statement">
        </a>

        <a href="Condition.php">
          <h3>Condition and Loop Statement</h3>
        </a>

        <label class="switch">
            <input type="checkbox" id="toggleSwitch3" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      </div>

      <div class="course-card">
        <a href="Arrays.php">
          <img src="img/Arrays.webp" alt="Arrays and Superglobals">
        </a>

        <a href="Arrays.php">
          <h3>Arrays and Superglobals</h3>
        </a>
        <label class="switch">
            <input type="checkbox" id="toggleSwitch4" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      </div>

      <div class="course-card">
        <a href="Classes.php">
          <img src="img/Classes.jfif" alt="Classes, Objects, and Forms">
        </a>

        <a href="Classes.php">
          <h3>Classes, Objects, and Forms</h3>
        </a>
        <label class="switch">
            <input type="checkbox" id="toggleSwitch5" checked>
            <span class="slider round"></span>
            <span class="switch-text">Start</span> <!-- Start text -->
          </label>

      </div>

      <div class="course-card">
        <a href="MySql.php">
          <img src="img/sql.png" alt="MySQL">
        </a>

        <a href="MySql.php">
        <h3>MySQL</h3>
        </a>

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
