<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integration of MySQL</title>
    <link rel="icon" href="img/Icon/programming.png" type="image/x-icon">
</head>
<body>
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

    <style>
 body {
    margin: 0;
    font-family: url('https://fonts.googleapis.com/css?family=Lato:100&display=swap');
    background: rgb(13,13,13);
    background: linear-gradient(90deg, rgba(13,13,13,1) 0%, rgba(61,61,61,1) 73%, rgba(68,124,105,1) 100%);
    color: #ffffff;
    padding: 0;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    height: 100%;
}

.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

header {
    text-align: center;
    color: #3fbf99;
    margin-bottom: 40px;
}

header h1 {
    font-size: 48px;
    margin-bottom: 10px;
    color: #3fbf99;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

header h1 span {
    color: #ffffff;
}

.content-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    margin-bottom: 40px;
    background: rgb(0,0,0);
    background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(61,61,61,1) 73%, rgba(73,91,85,1) 100%);
    border-radius: 50px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);
    padding: 30px;
}

.box {
    background-color: #1c1c1c;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.box:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    transform: scale(1.05);
    background-color: #2d2d2d;
}

.box h2 {
    color: #3fbf99;
    margin-bottom: 10px;
}

.box1 {
    background-color: #1c1c1c;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
    transition: transform 0.3s ease, box-shadow 0.3s ease;  
}

.box1:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    transform: scale(1.05);
    background-color: #2d2d2d;
}

.box1 h2 {
    color: #3fbf99;
    margin-bottom: 10px;
}

.box p,.box1,.box ul, .box pre {
    font-size: 16px;
}

pre {
    background-color: #222;
    padding: 10px;
    border-radius: 5px;
    color: #3fbf99;
    overflow-x: auto;
}

ul {
    list-style-type: none;
    padding-left: 0;
}

ul li {
    margin-bottom: 10px;
}

.conclusion {
    background-color: #1c1c1c;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
    text-align: center;
}

.conclusion h2 {
    color: #3fbf99;
    margin-bottom: 20px;
    text-align: center;
}

.conclusion p {
    font-size: 18px;
    line-height: 1.6;
    text-align: center;
}

@media screen and (max-width: 768px) {
    body {
        margin-left: 0;
    }

    .content-grid {
        grid-template-columns: 1fr;
    }

    header h1 {
        font-size: 36px;
    }
}
    </style>
</body>
</html>
