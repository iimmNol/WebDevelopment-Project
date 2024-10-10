<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials Menu</title>
    <link rel="stylesheet" href="Home.css">
    <script src="Home.js" defer></script>
</head>
<body>
    <div class="hamburger" onclick="toggleSidebar()">☰</div>
    

    <div class="sidebar" id="sidebar">
        <div class="logo">
            <img src="img/logo's/logo.png" alt="PHP Logo">
        </div>
        <nav>
            <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Course.php">Courses</a></li>
                <li><a href="Quiz.php">Quizzes</a></li>
                <li><a href="Sample.php">Sample Program</a></li>
                <li><a href="References.php">References</a></li>
                <li><a href="About us.php">About Us</a></li>
            </ul>
        </nav>
    </div>

    <!-- Main Content -->
    <div class="main-content" id="main-content">
        <h1>Welcome to PHP Tutorials</h1>
        <p>Explore our tutorials on PHP and build dynamic web applications.</p>
    </div>

    <div class="footer">
      <p>Footer</p>
    </div>
</body>
</html>
