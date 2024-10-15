<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meet The Team & Gallery</title>
    <link rel="icon" type="image/png" href="img/coding.png">
    <link rel="stylesheet" href="css/NavigationBar.css">
    <link rel="stylesheet" href="css/aboutUs.css">
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
  <a href="SampleProgram.php">Sample Program</a>
  <a href="References.php">References</a>
  <a class="active" href="aboutUs.php">About Us</a>
</div>
    <!-- Meet the Team Section -->
    <div class="container">
        <h2>ABOUT US</h2>
        <h1>MEET THE TEAM</h1>

        <div class="divider"></div>

        <div class="team">
            <div class="member">
                <img src="aboutUs/Neo.webp" alt="Neo Marinas">
                <h3>Neo Marinas</h3>
                <p>UI Designer</p>
            </div>

            <div class="member">
                <img src="aboutUs/Patrick.webp" alt="Patrick Despieda">
                <h3>Patrick Despipeda</h3>
                <p>Lead Programmer</p>
            </div>

            <div class="member">
                <img src="aboutUs/John.webp" alt="John Andrew Dimana">
                <h3>John Andrew Dimana</h3>
                <p>Programmer</p>
            </div>

            <div class="member">
                <img src="aboutUs/Hannah.webp" alt="Ma. Hannah Mae Paulino">
                <h3>Hannah Mae Paulino</h3>
                <p>UI Designer</p>
            </div>

            <div class="member">
                <img src="aboutUs/Noel.webp" alt="Noel Daniel Villamayor">
                <h3>Noel Daniel Villamayor</h3>
                <p>Lead Programmer</p>
            </div>

            <div class="member">
                <img src="aboutUs/Kenneth.webp" alt="Kenneth Eroll Almuete">
                <h3>Kenneth Eroll Almuete</h3>
                <p>Programmer</p>
            </div>
        </div>
    </div>

    <!-- Gallery Section -->
    <div class="gallery">
        <h2 class="gallery-title">Documentation</h2>
        <div class="gallery-grid">
            <img src="aboutUs/picture1.webp" alt="Gallery Image 1">
            <img src="aboutUs/picture2.webp" alt="Gallery Image 2">
            <img src="aboutUs/picture3.webp" alt="Gallery Image 3">
            <img src="aboutUs/picture4.webp" alt="Gallery Image 4">
        </div>

        <!-- Button Seemore -->
        <div class="button-container">
            <button class="animated-button" onclick="window.location.href='https://www.canva.com/design/DAGTWZN20HQ/JF9-KXDYrc_awUVt9i8JNg/edit?utm_content=DAGTWZN20HQ&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton';">
                <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">
                    <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                </svg>
                <span class="text">S E E M O R E</span>
                <span class="circle"></span>
                <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">
                    <path d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z"></path>
                </svg>
            </button>
        </div>
    </div>
    <div class="background-section"></div>

    <script src="js/NavigationBar.js"></script>
</body>
</html>