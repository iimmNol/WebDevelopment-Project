<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
            <img src="php-logo.png" alt="PHP Turorials img">
            </div>
        </nav>
    </header>

    <!-- Main Container -->
    <section class="main-container">
        <!-- Online Course Section -->
        <div class="course-section">
            <p class="course-label">ONLINE COURSE:</p>
            <h1>PHP: Hypertext Preprocessor</h1>
            <p class="description">
                Welcome to our PHP tutorial—your gateway to mastering server-side web development. Whether you're just starting or looking to refine your skills, this tutorial will guide you through the essentials of PHP.
            </p>
            <button class="start-btn">Start</button>
        </div>

        <!-- About Us Section inside the same container -->
        <div class="about-us">
            <h2>ABOUT US</h2>
            <div class="about-content">
                <div class="about-text">
                    <h3>HOW WE MADE THE WEBSITE</h3>
                    <p>
                        This platform is more than just a project—it's a journey we embarked on as a team. With passion for coding and collaboration, we built this site to inspire others to explore the world of programming. Every line of code and design detail reflects our collective effort, late-night problem-solving sessions, and the joy of overcoming challenges together.
                    </p>
                </div>
                <div class="about-icons">
                    <img src="css-logo.png" alt="CSS Logo">
                    <img src="php-logo.png" alt="PHP Logo">
                    <img src="html-logo.png" alt="HTML Logo">
                </div>
            </div>
        </div>
    </section>
</body>
</html>



<style>
 * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: url('https://fonts.googleapis.com/css?family=Lato:100&display=swap');
    background: rgb(13,13,13);
    background: linear-gradient(90deg, rgba(13,13,13,1) 0%, rgba(61,61,61,1) 73%, rgba(68,124,105,1) 100%);
    color: #ffffff;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    margin: 0;
    height: 100%;
}

header {
    background-color: #1e3a53;
    text-align: center;
    padding: 20px;
    color: #3fbf99;
}

header h1 {
    font-size: 48px;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #3fbf99;
    border-radius: 50px;
}

.main-container {
    background: linear-gradient(90deg, rgba(13,13,13,1) 0%, rgba(61,61,61,1) 73%, rgba(68,124,105,1) 100%);
    padding: 50px 20px;
    text-align: center;
    color: white;
    border-radius: 50px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);
    max-width: 1200px;
    margin: 20px;
}

.course-label {
    color: #3fbf99;
    font-size: 18px;
    font-weight: bold;
}

h1 {
    font-size: 48px;
    font-weight: bold;
    margin: 20px 0;
}

.description {
    font-size: 18px;
    margin-bottom: 30px;
}

.start-btn {
    background-color: #3fbf99;
    color: #fff;
    padding: 15px 30px;
    border: none;
    cursor: pointer;
    font-size: 16px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 30px ;
}

.start-btn:hover {
    background-color: #2d2d2d;
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    filter: drop-shadow(0 0 1px currentcolor);
}

.about-us {
    margin-top: 50px;
    padding: 20px;
    background-color: #1c1c1c;
    border-radius: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
}

.about-us h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

.about-content {
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-top: 20px;
}

.about-icons img {
    width: 80px;
    margin: 0 20px;
}

.about-text {
    text-align: left;
    max-width: 600px;
}

.about-text h3 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #3fbf99;
}

.about-text p {
    font-size: 16px;
    line-height: 1.6;
}

@media screen and (max-width: 768px) {
    .about-content {
        flex-direction: column;
    }

    h1 {
        font-size: 36px;
    }
}


</style>
