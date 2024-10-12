<!DOCTYPE html>
<html>
<head>
  <title>Courses</title>
  <style>
    body {
      font-family: url('https://fonts.googleapis.com/css?family=Lato:100&display=swap');
    }

    .container {
      max-width: 960px;
      margin: 20px auto;
    }

    h1 {
      text-align: center;
      margin-bottom: 30px;
    }

    .course-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr); /* Creates 3 equal-width columns */
      gap: 20px;
    }

    .course-card {
      border: 1px solid #ccc;
      padding: 20px;
    }

    .course-card img {
      width: 100%;
      height: 200px; /* Adjust as needed */
      object-fit: cover;
      margin-bottom: 10px;
    }

    .course-card h3 {
      margin-bottom: 5px;
    }

    .start-button {
      background-color: #00bfa5; 
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border: none;
      cursor: pointer;
      display: inline-block; 
    }

    .start-button:hover {
      background-color: #008c73;
    }

    .test-yourself {
      text-align: right;
      margin-bottom: 20px;
    }

    .test-yourself a {
      text-decoration: none;
      color: #00bfa5;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>COURSES</h1>

    <div class="test-yourself">
      <a href="#">Test yourself &#8594;</a>
    </div>

    <div class="course-grid">
      <div class="course-card">
        <img src="img/INTRODUCTION.png" alt="Introduction to PHP"> 
        <h3>Introduction to PHP</h3>
        <button class="start-button">Start &#8594;</button>
      </div>

      <div class="course-card">
        <img src="img/Syntax.png" alt="PHP Basic Syntax">
        <h3>PHP Basic Syntax</h3>
        <button class="start-button">Start &#8594;</button>
      </div>

      <div class="course-card">
        <img src="img/Conditional.png" alt="Conditional and Looping Statement">
        <h3>Condition and Loop Statement</h3>
        <button class="start-button">Start &#8594;</button>
      </div>

      <div class="course-card">
        <img src="img/Arrays.png" alt="Arrays and Superglobals">
        <h3>Arrays and Superglobals</h3>
        <button class="start-button">Start &#8594;</button>
      </div>

      <div class="course-card">
        <img src="img/Classes.png" alt="Classes, Objects, and Forms">
        <h3>Classes, Objects, and Forms</h3>
        <button class="start-button">Start &#8594;</button>
      </div>

      <div class="course-card">
        <img src="img/SQL.png" alt="MySQL">
        <h3>MySQL</h3>
        <button class="start-button">Start &#8594;</button>
      </div>
    </div>
  </div>
</body>
</html>
