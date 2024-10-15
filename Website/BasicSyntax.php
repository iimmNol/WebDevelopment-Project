<!DOCTYPE html>
    <html lang="en">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Basic Syntax Infographic</title>
        <link rel="icon" type="image/png" href="img/coding.png">
        <link rel="stylesheet" href="css/NavigationBar.css">
        <link rel="stylesheet" href="css/BasicSyntax.css">
        <link rel="stylesheet" href="css/backandfrontbutton.css">
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
        <a href="Introduction.php">
            <button class="back">← BACK</button> 
        </a>
    </div>
    
    <?php
        $page_title = "PHP Basic Syntax"; // Using PHP variables
        echo "<h3>$page_title</h3>";
    ?>
    
    <p class= "note"><?php echo "A PHP scripting block comprises a sequence of PHP statements starting with an opening tag and a closing tag."; ?></p>
    
    <div class="container">
        <!-- Single-line comments -->
        <div class="box">
            <h2>COMMENTS <br>// Single-line</h2>
            <p>PHP comment is a line that is not executed.</p>
            <div class="code">
                &lt;?php<br>
                // comment<br>
                echo("Hello!");<br>
                ?&gt;
            </div>
            <a href="https://www.programiz.com/php/online-compiler/" class="try-it">TRY IT!</a>
        </div>
        
        <div class="box">
            <h2>COMMENTS <br>/* Multiple lines */</h2>
            <div class="code">
                &lt;?php<br>
                echo("Hello!");<br>
                /* This is a<br>
                multi-line comment */<br>
                ?&gt;
            </div>
            <a href="https://www.programiz.com/php/online-compiler/" class="try-it">TRY IT!</a>
        </div>

        <div class="box">
            <h2>PRINTING STATEMENTS <br>echo</h2>
            <div class="code">
                &lt;?php<br>
                echo("Hello, World!");<br>
                ?&gt;
            </div>
            <a href="https://www.programiz.com/php/online-compiler/" class="try-it">TRY IT!</a>
        </div>

        <div class="box">
            <?php
                echo "<p>A comment in PHP code is a line that is not executed as part of the program. Its purpose is to be read by someone who is looking at the code. Comments help others understand your code or remind yourself what you did.</p>";
            ?>
        </div>

        <div class="box">
            <h2>PRINTING STATEMENTS <br>print</h2>
            <div class="code">
                &lt;?php<br>
                print "Hello!";<br>
                print("World!");<br>
                ?&gt;
            </div>
            <a href="https://www.programiz.com/php/online-compiler/" class="try-it">TRY IT!</a>
        </div>

        <div class="box">
            <?php
                echo "<p>PHP conditional statements, looping statements, classes, functions, and user-defined functions are not case-sensitive. 
                Technically, PHP is partially case-sensitive; you need to determine which are case-sensitive to avoid errors.</p>";
            ?>
        </div>
    </div>
    
    <h1><?php echo "VARIABLES"; ?></h1>
    <p class= "note"><?php echo "A variable is a part of a computer's memory that can be used to store a value. Variables in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive."; ?></p>

    <div class="variables-container">
        <div class="box">
            <img src="img/boolean.png" alt="Boolean Image">
            <p><?php echo "Boolean is the simplest type. A bool expresses a truth value, and it can be either true or false."; ?></p>
        </div>

        <div class="box">
            <img src="img/integer.png" alt="Integer Image">
            <p><?php echo "An integer is a non-decimal number between -2,147,483,648 and 2,147,483,647."; ?></p>
        </div>

        <div class="box">
            <img src="img/float.png" alt="Floating-Point Image">
            <p><?php echo "A floating-point number (float) is a number with a decimal part or a number in exponential form."; ?></p>
        </div>

        <div class="box">
            <img src="img/string.png" alt="String Image">
            <p><?php echo "A string is a series of characters. A string can be any text inside quotes. You can use single or double quotes."; ?></p>
        </div>
    </div>

    <h4><?php echo "CONSTANT"; ?></h4>
    <p class="note1"><?php echo "A constant is an identifier for a simple value that cannot change during the execution of the script. Once its value is defined, it cannot be modified. Constants are case-sensitive."; ?></p>
    
    <h5><?php echo "WHAT ARE FUNCTIONS"; ?></h5>
    <p class="note1"><?php echo "A function is a block of statements that can be used repeatedly in a program."; ?></p>

    <div class="variables-container">
        <div class="box">
            <h2>SYNTAX</h2>
            <p>function functionName($var1, $var2, $var3) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//code here<br>
            }</p>
        </div>

        <div class="box">
            <h2>SAMPLE CODE</h2>
            <p>function add($val1, $val2) {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo $val1 + $val2;<br>
            }<br><br>add(5,2);</p>
        </div>

        <div class="box">
            <h2>SYNTAX</h2>
            <p>function functionName() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//code here<br>
            }</p>
        </div>

        <div class="box">
            <h2>SAMPLE CODE</h2>
            <p>function greetings() {<br>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo "Hello!";<br>
            }<br>greetings();</p>
        </div>
    </div>
    <br>
    <p class="note1"><?php echo "In PHP, functions pass information through arguments, which are variables listed in parentheses and separated by commas."; ?></p>
    
    <div class="next2">
        <a href="Condition.php">
            <button class="next">NEXT →</button> 
        </a>
    </div>
    
    <script src="js/NavigationBar.js"></script>
</body>
</html>