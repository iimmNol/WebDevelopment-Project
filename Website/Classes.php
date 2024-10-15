<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class, Objects, and Forms</title>
    <link rel="icon" type="image/png" href="img/coding.png">
    <link rel="stylesheet" href="css/NavigationBar.css">
    <link rel="stylesheet" href="css/backandfrontbutton.css">
    <link rel="stylesheet" href="css/Classes.css">
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
        <a href="Arrays.php">
            <button class="back">← BACK</button> 
        </a>
    </div>

    <div class="container">
        <header>
            <h1>Class, Objects, and Forms</h1>
        </header>

        <div class="content-grid">
            <div class="box">
                <h2>Class</h2>
                <p>A template for objects.</p>
            </div>
            <div class="box">
                <h2>Objects</h2>
                <p>An instance of a class.</p>
            </div>
            <div class="box">
                <h2>Forms</h2>
                <p>Represents a document section for collecting user input.</p>
            </div>
        </div>

        <div class="form-syntax">
            <h2>Class Syntax</h2>
            <pre>&lt;?php
class SimpleClass {
    // property declaration
    public $name;

    // method declaration
    function __construct($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}
?&gt;
            </pre>
        </div>

        <div class="keywords-section">
            <div class="keyword-box">
                <h3>$this keyword</h3>
                <p>The <code>$this</code> keyword refers to the current object and is only available inside methods.</p>
            </div>
            <div class="keyword-box">
                <h3>new keyword</h3>
                <p>The <code>new</code> keyword is used to create an instance of a class, initializing its properties and methods with default or provided values.</p>
            </div>
            <div class="keyword-box">
                <h3>class keyword</h3>
                <p>Basic class definitions begin with the <code>class</code> keyword, followed by the class name, and include the definition of the properties and methods belonging to the class.</p>
            </div>
        </div>

        <div class="form-syntax">
            <h2>Form Syntax</h2>
            <pre>
&lt;html&gt;
&lt;body&gt;
    &lt;form action="submit.php" method="post"&gt;
        &lt;label for="name"&gt;Name:&lt;/label&gt;
        &lt;input type="text" id="name" name="name"&gt;
        &lt;br&gt;
        &lt;label for="email"&gt;Email:&lt;/label&gt;
        &lt;input type="text" id="email" name="email"&gt;
        &lt;br&gt;
        &lt;input type="submit" value="Submit"&gt;
    &lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;
            </pre>
        </div>

        <div class="form-method">
            <h3>Method</h3>
            <p>Specifies the HTTP method for submitting the form. The most commonly used form methods are POST (invisible to others) and GET (visible to everyone).</p>
        </div>

        <div class="form-action">
            <h3>Action</h3>
            <p class="note">Specifies the URL that processes the form submission.</p>
        </div>
    </div>

<div class="next2">
        <a href="MySql.php">
            <button class="next">NEXT →</button> 
        </a>
    </div>

    <script src="js/NavigationBar.js"></script>
</body>
</html>