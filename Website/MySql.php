<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integration of MySQL</title>
    <link rel="icon" type="image/png" href="img/coding.png">
    <link rel="stylesheet" href="css/NavigationBar.css">
    <link rel="stylesheet" href="css/backandfrontbutton.css">
    <link rel="stylesheet" href="css/MySql.css">
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
        <a href="Classes.php">
            <button class="back">← BACK</button> 
        </a>
    </div>

    <div class="container">
        <!-- Header Section -->
        <header>
            <h1>INTEGRATION OF <span>MYSQL</span></h1>
        </header>

        <!-- Main Content Section -->
        <section class="content-grid">
            <!-- MYSQL Section -->
            <div class="box">
                <h2>MYSQL</h2>
                <p>MySQL is an open-source relational database management system. It allows the organization and querying of data, playing a crucial role in back-end web development. MySQL is widely used because of its performance, reliability, and ease of use.</p>
            </div>

            <!-- CONNECTION Section -->
            <div class="box">
                <h2>CONNECTION</h2>
                <p>In MySQL, connections refer to how applications communicate with the database. Opening and closing connections correctly is important for managing resources efficiently. Proper connection management ensures smooth data operations between a web application and the database.</p>
            </div>

            <!-- WHY MYSQL Section -->
            <div class="box">
                <h2>WHY MYSQL?</h2>
                <ul>
                    <li>It's free and open source.</li>
                    <li>Supports large databases.</li>
                    <li>Works well with various programming languages like PHP and Python.</li>
                    <li>Highly secure, offering robust data protection.</li>
                </ul>
            </div>

            <!-- OPEN DATABASE CONNECTION Section -->
            <div class="box">
                <h2>HOW TO OPEN DATABASE CONNECTION?</h2>
                <p>Use the following PHP code to open a MySQL connection:</p>
                <pre>
&lt;?php
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?&gt;
                </pre>
            </div>

            <!-- CLOSE DATABASE CONNECTION Section -->
            <div class="box1">
                <h2>HOW TO CLOSE DATABASE CONNECTION?</h2>
                <p>Use the following PHP code to close a MySQL connection:</p>
                <pre>
&lt;?php
$conn->close();
?&gt;
                </pre>
            </div>
        </section>

        <!-- Conclusion Section -->
        <section class="conclusion">
            <h2>CONCLUSION</h2>
            <p>As we conclude the PHP programming course, we take a moment to reflect on the collaborative journey we've undertaken in learning MySQL and PHP together. This project has provided not only a deep understanding of PHP programming but also an integrated concept of how MySQL works in developing comprehensive platforms that include user authentication, data storage, and web-based operations.</p>
            <p>By building on this foundation, you'll be well-equipped to develop real-world applications, both for academic and professional projects.</p>
        </section>
    </div>

    <div class="next2">
        <a href="Course.php">
            <button class="next">NEXT →</button> 
        </a>
    </div>

    <script src="js/NavigationBar.js"></script>
</body>
</html>