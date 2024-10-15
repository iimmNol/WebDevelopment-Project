<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class, Objects, and Forms</title>
    <link rel="icon" href="img/Icon/programming.png" type="image/x-icon">
</head>
<body>
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

    <style>
        body {
    font-family: url('https://fonts.googleapis.com/css?family=Lato:100&display=swap');
    background: rgb(13,13,13);
    background: linear-gradient(90deg, rgba(13,13,13,1) 0%, rgba(61,61,61,1) 73%, rgba(68,124,105,1) 100%);
    margin: 0;
    padding: 0;
    color: #ffffff;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: center;
    height: 100%;
    margin-bottom:50px;
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
    text-align: center;
}

.box:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    background-color: #2d2d2d;
}

.box h2 {
    color: #3fbf99;
    margin-bottom: 10px;
}

.box p, .box ul, .box pre {
    font-size: 16px;
    line-height: 1.6;
}

pre {
    background-color: #222;
    color: #3fbf99;
    padding: 10px;
    border-radius: 5px;
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
}

.conclusion p {
    font-size: 18px;
    line-height: 1.6;
    text-align: center;
}

.keywords-section {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    grid-gap: 20px;
    margin-top: 40px;
    background: rgb(0,0,0);
    background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(61,61,61,1) 73%, rgba(73,91,85,1) 100%);
    border-radius: 50px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6);
    padding: 30px;
}

.keyword-box {
    background-color: #1c1c1c;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
    transition: transform 0.3s ease;
    text-align: center;
}

.keyword-box:hover {
    transform: scale(1.05);
    background-color: #2d2d2d;
}

.keyword-box h3 {
    color: #3fbf99;
}

.form-syntax {
    margin-top: 40px;
    background-color: #1c1c1c;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
}

.form-syntax pre {
    background-color: #222;
    color: #3fbf99;
    padding: 10px;
    border-radius: 8px;
    overflow-x: auto;
}

.form-method, .form-action {
    margin-top: 20px;
}

.form-method h3, .form-action h3 {
    color: #3fbf99;
}

@media screen and (max-width: 768px) {
    .content-grid, .keywords-section {
        grid-template-columns: 1fr;
    }

    header h1 {
        font-size: 36px;
    }

    p.note::before {
        content: "NOTE";
        display: inline-block;
        background-color: #3fbf98; 
        color: white; 
        padding: 2px 4px;
        margin-right: 10px;
        font-weight: bold;
        font-family: Arial, sans-serif;
    }

    p.note {
        background: rgb(13,13,13);
        background: linear-gradient(90deg, rgba(13,13,13,1) 0%, rgba(61,61,61,1) 73%, rgba(68,124,105,1) 100%);
        padding: 10px;
        border-radius: 5px;
        font-family: Georgia, serif;
        text-align: center;
        font-style: italic;
    }
}
    </style>
</body>
</html>
