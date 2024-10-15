<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays and Superglobals</title>
    <link rel="icon" type="image/png" href="img/coding.png">
    <link rel="stylesheet" href="css/Arrays.css">
    <link rel="stylesheet" href="css/backandfrontbutton.css">
    <link rel="stylesheet" href="css/NavigationBar.css">

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
        <a href="Condition.php">
            <button class="back">← BACK</button> 
        </a>
    </div>

    <div class="container">
        <h1>Arrays & Superglobals</h1>
        <p class="note">
            An array is a data structure that stores one or more similar types of values in a single value. 
            There are three different kinds of arrays and each array value is accessed using an ID which is called an array index.
        </p>

        <div class="arrays">
            <div class="array-type">
                <h3>Numeric Array</h3>
                <p>arrays with numeric value</p>
            </div>
            <div class="array-type">
                <h3>Associative Array</h3>
                <p>arrays with named keys</p>
            </div>
            <div class="array-type">
                <h3>Multidimensional Array</h3>
                <p>arrays containing one or more arrays</p>
            </div>
        </div>

        <div class="superglobals">
            <h2>Superglobals</h2>
            <p class="note">
                Contains a reference to every variable which is currently available within the global scope of the script.
                The keys of this array are the names of the global variables.
            </p>
            <div class="superglobal-list">
                <div class="superglobal-item">
                    <h4>$_GLOBALS</h4>
                    <p>Contains a reference to every variable which is currently available within the global scope of the script.</p>
                </div>
                <div class="superglobal-item">
                    <h4>$_SERVER</h4>
                    <p>An array containing information such as headers, paths, and script locations.</p>
                </div>
                <div class="superglobal-item">
                    <h4>$_SESSION</h4>
                    <p>Contains a reference to every variable which is currently available within the session.</p>
                </div>
                <div class="superglobal-item">
                    <h4>$_PHP_SELF</h4>
                    <p>A string containing the script file name in which it is called.</p>
                </div>
                <div class="superglobal-item">
                    <h4>$_GET</h4>
                    <p>An associative array of variables passed to the current script via the HTTP GET method.</p>
                </div>
                <div class="superglobal-item">
                    <h4>$_POST</h4>
                    <p>An associative array of variables passed to the current script via the HTTP POST method.</p>
                </div>
                <div class="superglobal-item">
                    <h4>$_FILES</h4>
                    <p>An associative array of items uploaded to the current script via the HTTP POST method.</p>
                </div>
                <div class="superglobal-item">
                    <h4>$_REQUEST</h4>
                    <p>An associative array consisting of the contents of $_GET, $_POST, and $_COOKIE.</p>
                </div>
                <div class="superglobal-item">
                    <h4>$_COOKIE</h4>
                    <p>An associative array of variables passed to the current script via cookies.</p>
                </div>
                <div class="superglobal-item">
                    <h4>$php_errormsg</h4>
                    <p>A variable containing the text of the last error message generated by PHP.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="next2">
        <a href="Classes.php">
            <button class="next">NEXT →</button> 
        </a>
    </div>

    <script src="js/NavigationBar.js"></script>
</body>
</html>