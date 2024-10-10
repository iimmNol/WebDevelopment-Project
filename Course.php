<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Hamburger Menu -->
    <div class="hamburger">☰</div>

    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
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
                    <li><a href="Aboutus.php">About Us</a></li>
                </ul>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <header>
                <h2>Courses</h2>
                <button class="test-yourself-btn">Test Yourself</button>
            </header>

            <!-- Course Grid -->
            <div class="course-grid">
                <!-- Example of a Course Card -->
                <?php
                $courses = [
                    ['title' => 'Introduction to PHP', 'img' => 'img/course1.jpg'],
                    ['title' => 'PHP Basic Syntax', 'img' => 'img/course2.jpg'],
                    ['title' => 'Conditional and Looping Statement', 'img' => 'img/course3.jpg'],
                    ['title' => 'Arrays and Superglobals', 'img' => 'img/course4.jpg'],
                    ['title' => 'Classes, Objects, and Forms', 'img' => 'img/course5.jpg'],
                    ['title' => 'MySQL', 'img' => 'img/course6.jpg']
                ];

                // Loop through courses and generate cards
                foreach ($courses as $course) {
                    echo '
                        <div class="course-card">
                            <img src="'.$course['img'].'" alt="'.$course['title'].'">
                            <h3>'.$course['title'].'</h3>
                            <button class="start-btn">Start</button>
                        </div>
                    ';
                }
                ?>
            </div>
        </div>
    </div>
