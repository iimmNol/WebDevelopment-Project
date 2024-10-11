<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials - Introduction to PHP</title>
    <style>
        footer {
    background: linear-gradient(180deg, #5AD2AF, #2C7F99);
    color: white;
    padding: 10px 0;
    text-align: center;
    position: relative;
}

.footer-container {
    display: flex;
    justify-content: space-between;
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 20px;
    font-size: 0.9rem;
    align-items: center;
}

.footer-left {
    font-family: 'Arial', sans-serif;
}

.footer-right {
    font-family: 'Arial', sans-serif;
}

footer::before {
    content: '';
    display: block;
    border-bottom: 1px solid white;
    width: 100%;
    margin: 0 auto 10px;
    max-width: 1000px;
}

    </style>
</head>
<body>
<!-- INTRODDUCTION TO PHP -->
    <div class="container">
        <div class="header">
            <h1><span class="icon"></span> PHP Tutorials</h1>
            <h2>INTRODUCTION TO PHP</h2>
        </div>

        <div class="content">
            <div class="left">
                <p>PHP (PHP: Hypertext Preprocessor) is a widely used open-source scripting language, specifically designed for web development. It significantly enhances the capabilities of HTML, particularly when integrated with database query languages like MySQL.</p>

                <div class="php-details">
                    <p>PHP code within HTML. A special program known as the PHP interpreter processes these PHP insertions, enabling the creation of web pages that adapt to user input or data. PHP scripts are executed on the server, and PHP files can include various elements such as HTML, CSS, JavaScript, text, MySQL, and PHP code itself, with a ".php" file extension.</p>
                </div>
            </div>

            <div class="right">
                <h3>WHY PHP?</h3>
                <ul>
                    <li>PHP can be executed on different platforms like Windows, Linux, and Mac OS.</li>
                    <li>PHP is free and can run on different web browsers.</li>
                    <li>PHP is simple to understand and it supports wide-range databases.</li>
                    <li>PHP can create both static and dynamic web pages.</li>
                    <li>PHP runs efficiently on the server side.</li>
                    <li>You have the choice of using procedural programming or object-oriented programming (OOP), or a mixture of both.</li>
                    <li>PHP's abilities include outputting images and PDF files.</li>
                </ul>
            </div>
        </div>
<!-- PHP BASIC SYNTAX-->
        <div class="header">
            <h2>PHP BASIC SYNTAX</h2>
        </div>

        <div class="content2">
            <div class="middle">
                <p>A PHP scripting  block comprises a sequence of PHP statement starting with an opening tag and closing</p>

                <div class="php-comments">
                    <h3>COMMENTS</h3>
                    <p>//Single-line</p>
                    <p>PHP comment is a line that is not executed.<p>
                </div>
            </div>

            <div class="php-code">
                <pre><code>&lt;?php
    //comment
    echo ("hello");
?&gt;</code></pre>
            </div>

            <div class="statement">
                <p>To skip the code for checking and debugging <br><br> To understand the code properly <br><br> To take note of what you did last time</p>
            <a href="https://www.programiz.com/php/online-compiler/">
                <button class="try it-button">TRY IT →</button>
            </a>
            </div>
            <!-- PRINTING STATEMENT (ECHO) -->
            <div class="php-printingStatement">
                <h3>PRINTING STATEMENT</h3>
                <p>echo</p>
                <pre><code>&lt;?php
    echo ("Hello World!");
?&gt;</code></pre>
            <a href="https://www.programiz.com/php/online-compiler/">
                <button class="try it-button">TRY IT →</button>
            </a>
            </div>
            <!-- PRINTING STATEMENT (PRINT) -->
            <div class="php-printingStatement">
                <h3>PRINTING STATEMENT</h3>
                <p>print</p>
                <pre><code>&lt;?php
    print "Hello!";
    print ("World");
?&gt;</code></pre>
            <a href="https://www.programiz.com/php/online-compiler/">
                <button class="try it-button">TRY IT →</button>
            </a>
            </div>
            <!-- COMMENTS -->
            <div class="php-comments">
                <h3>COMMENTS</h3>
                <p>/* multiple lines</p>
                <pre><code>&lt;?php
    echo ("Hello");
    /*this is a multi-line comment*/
?&gt;</code></pre>
            <a href="https://www.programiz.com/php/online-compiler/">
                <button class="try it-button">TRY IT →</button>
            </a>
            </div>

            <div class="statement">
                <p>PHP condition statements looping statements, looping statements, classes, functions, and user-defined functions are not case sensitive. Technically, PHP is still partially case-sensitive; there is a need to determine which are case sensitive and not to avoid errors in the code.</p>
            </div>
        </div>
<!-- VARIABLES -->
        <div class="variables">
            <h2>Variables</h2>

            <div class="variables_definition">
                A variable is a part of a computer's memory that can be used to store a value. Variable in PHP are represented by a dollar sign followed by the name of the variable. The variable name is case-sensitive.
            </div>

            <div class="variable-container">
                <!-- BOOLEAN -->
                <div class="variable">
                    <h3>Boolean</h3>
                    <p>Booleans are the simplest type. A bool expresses a truth value. It can be either true or false </p>
                </div>
                <!-- INTEGER -->
                <div class="variable">
                    <h3>Integer</h3>
                    <p>An integer is a non-decimal number between -2,147,483,648 to 2,147,483,647</p>
                </div>
                <!-- FLOATING-POINT -->
                <div class="variable">
                    <h3>Floating-Point</h3>
                    <p>A floating-point number (float) is a number with decimal point or a number in exponential form.</p>
                </div>
                <!-- STRING -->
                <div class="variable">
                    <h3>String</h3>
                    <p>A string is a series of characters. A string can be any text inside quotes you can use single or double quotes.</p>
                </div>
            </div>
            <!-- CONSTANT -->
            <div class="constant">
                <h3>Constant</h3>
                <p>A constant is an identifier for a simple value that cannot change during the execution of the script. Once it's value is defined, it cannot be modifed. Constrants are case sensitive. By convention, <div class="syntax">
                <p>define(name, value, case-insensitive)</p>
            </div>
        </div>
<!-- WHAT ARE FUNCTIONS -->
        <div class="functions">
            <h2>What are Functions?</h2>
            <p>A function is a block of statements that can be use repeatedly in a program. Any valid PHP code mayy apear inside a function even other function and class definitions</p>
<!-- SYNTAX ON LEFT -->
            <div class="syntax">
                <h3>Syntax</h3>
                <pre><code>&lt;?php
    function functionName($var1, $var2, $var3) {
        //code here
    }
?&gt;</code></pre>
            </div>
<!-- SAMPLE-CODE ON LEFT -->
            <div class="sample-code">
                <h3>Sample Code</h3>
                <pre><code>&lt;?php
    function add($val1, $val2) {
        echo $val1 + $val2;
    }
    add(5,2);
?&gt;</code></pre>
            </div>  
        </div>
<!-- SYNTAX ON RIGHT -->    
        <div class="syntax2">
                <h3>Syntax</h3>
                <pre><code>&lt;?php
    function functionName() {
        //code here
    }
?&gt;</code></pre>
            </div>
<!-- SAMPLE-CODE ON RIGHT -->
            <div class="sample-code2">
                <h3>Sample Code</h3>
                <pre><code>&lt;?php
    function add() {
        echo "Hello!";
    }
    greetings();
?&gt;</code></pre>
            </div>  
        </div>
        
        <div class="function-info">
            <p>A function in PHP can pass information using arguments. Arguments are like variables. Arguments are specified after the funtion name inside the parentheses, where commas are used to separate the arguments</p>
        </div>
<!--CONDITIONAL STATEMENT-->
        <div class="conditionals">
            <h2>Conditional Statements</h2>
<!-- IF STATEMENT -->
            <div class="if-statement">
                <pre><code>&lt;?php
    if (condition) {
        //code to be executed if condition is true
    }
?&gt;</code></pre>
                <h3>If Statement</h3>
            </div>
<!-- SWITCH STATEMENT -->
            <div class="switch-statement">
                <pre><code>&lt;?php
    switch (n) {
        case label:
            //code to be executed if n=label1
            break;
        case label2:
            //code to be executed if n=label2;
            break;
            default:
            //code to be executed if n is different from all labels
    }
?&gt;</code></pre>
                <h3>Switch Statement</h3>
            </div>
<!-- ELSE KEYWORD -->
            <div class="else-statement">
                <pre><code>&lt;?php
    if (condition) {
        //code
    } else {
        //code to be executed if condition is false
    }
?&gt;</code></pre>
                <h3>Else Keyword</h3>
            </div>
        </div>
<!-- LOOPING STATEMENT -->
        <div class="loops">
            <h2>Looping Statements</h2>
            <!-- WHILE STATEMENT -->
            <div class="loop">
                <pre><code>&lt;?php
    while (condition) {
        //code to be executed
    }
?&gt;</code></pre>
                <h3>While Statement</h3>
            </div>
            <!-- DO-WHILE STATEMENT -->
            <div class="loop">
                <pre><code>&lt;?php
    do {
        //code to be executed;
    } while (condition is true);
?&gt;</code></pre>
                <h3>Do-While Statement</h3>
            </div>
            <!-- FOR STATEMENT -->
            <div class="loop">
                <pre><code>&lt;?php
    for (init counter; test counter; increment counter) {
        //code to be executed for each iteration
    }
?&gt;</code></pre>
                
                <h3>For Statement</h3>
            </div>
            <!-- FOREACH STATEMENT -->
            <div class="loop">
                <pre><code>&lt;?php
    foreach ($array as $value) {
        //code to be executed;
    }
?&gt;</code></pre>
<h3>Foreach Statement</h3>
            </div>
            
            <div class="foreachInfo">
                <p>The foreach loop works only on arrays and is used to loop through each key/value pair in an array</p>
            </div>
        </div>

<!-- ARRAYS & SUPERGLOBALS -->
        <h1>ARRAYS & SUPERGLOBALS</h1>
        <p>An array is a data structure that stores one or more similar types of values in a single value. There are three different kinds of arrays, and each array value is accessed using an ID, which is called an array index.</p>
<!-- NUMERIC ARRAY -->
        <div class="array-types">
            <div class="array-type">
                <h2>NUMERIC ARRAY</h2>
                <p>arrays with numeric value</p>
            </div>
<!-- ASSOCIATIVE ARRAY -->
            <div class="array-type">
                <h2>ASSOCIATIVE ARRAY</h2>
                <p>arrays with named keys</p>
            </div>
<!-- MULTIDIMENSIONAL ARRAY -->
            <div class="array-type">
                <h2>MULTIDIMENSIONAL ARRAY</h2>
                <p>arrays containing one or more arrays</p>
            </div>
        </div>
<!-- SUPERGLOBALS -->
        <h2>SUPERGLOBALS</h2>
        <p>contains a reference to every variable which is currently available within the global scope of the script. The keys of this array are the names of the global variables.</p>
<!-- $_GLOBALS -->
        <div class="superglobals">
            <div class="superglobal">
                <h3>$_GLOBALS</h3>
                <p>contains a reference to every variable which is currently available within the globalscope of the script. The keys of this array are the names of the global variables.</p>
            </div>
<!-- $_GET -->            
            <div class="superglobal">
                <h3>$_GET</h3>
                <p>an associative array of variables passed to the current script via the HTTP GET method.</p>
            </div>
<!-- $_POST -->
            <div class="superglobal">
                <h3>$_POST</h3>
                <p>an associative array of variables passed to the current script via the HTTP POST method.</p>
            </div>
<!-- $_FILES -->            
            <div class="superglobal">
                <h3>$_FILES</h3>
                <p>an associative array of items uploaded to the current script via the HTTP POST method.</p>
            </div>
<!-- $_REQUEST -->
            <div class="superglobal">
                <h3>$_REQUEST</h3>
                <p>an associative array consisting of the contents of $_GET, $_POST, and $_COOKIE.</p>
            </div>
<!-- $_COOKIE -->
            <div class="superglobal">
                <h3>$_COOKIE</h3>
                <p>an associative array of variables passed to the current script via HTTP cookies.</p>
            </div>
<!-- $_SESSION -->
            <div class="superglobal">
                <h3>$_SESSION</h3>
                <p>contains a reference to every variable which is currently available within the globalscope of the script. The keys of this array are the names of the global variables.</p>
            </div>
<!-- $_SERVER -->
            <div class="superglobal">
                <h3>$_SERVER</h3>
                <p>an array containing information such as headers, paths, and script locations. The entries in this array are created by the webserver. There is no guarantee that every web server will provide any of these.</p>
            </div>
<!-- $_PHP_SELF -->
            <div class="superglobal">
                <h3>$_PHP_SELF</h3>
                <p>a string containing the PHP script filename in which it is called.</p>
            </div>
<!-- $php_errormsg -->
            <div class="superglobal">
                <h3>$php_errormsg</h3>
                <p>a variable containing the text of the last error message generated by PHP.</p>
            </div>
        </div>
<!-- CLASS -->
        <div class="class-objects-forms">
            <div class="section">
                <h2>CLASS</h2>
                <p>a template for objects</p>
            </div>
<!-- OBJECTS -->
            <div class="section">
                <h2>OBJECTS</h2>
                <p>an instance of a class</p>
            </div>
<!-- FORMS -->
            <div class="section">
                <h2>FORMS</h2>
                <p>represents a document section for collecting user input</p>
            </div>
        </div>

        <h2>CLASS SYNTAX</h2>
        <pre><code>&lt;?php
    class SimpleClass {
        // property declaration
        public $name;

        // method declaration
        function set_name($name) {
        $this-&gt;name = $name;
        }

        function get_name() {
                return $this-&gt;name;
        }
    }
?&gt;</code></pre>

        <div class="keywords">
            <div class="keyword">
                <h3>$this keyword</h3>
                <p>the $this keyword refers to the current object and is only available inside methods.</p>
            </div>
            <div class="keyword">
                <h3>new keyword</h3>
                <p>to create an instance of a class, use the new keyword. Each instance/object created has the same properties and methods but can have different values.</p>
            </div>
            <div class="keyword">
                <h3>class keyword</h3>
                <p>basic class definitions begin with the class keyword, followed by a class name, followed by a pair of curly braces, which enclose the definitions of the properties and methods belonging to the class.</p>
            </div>
        </div>

        <h1>INTEGRATION OF MYSQL</h1>
<!-- METHOD -->
        <div class="section">
            <h2>METHOD</h2>
            <p>Specifies the HTTP method for submitting the form. The most commonly used form methods are POST (invisible to others) and GET (visible to everyone).</p>
        </div>
<!-- ACTION -->
        <div class="section">
            <h2>ACTION</h2>
            <p>Specifies the URL that processes the form submission.</p>
        </div>
<!-- FORM SYNTAX -->
        <div class="form-syntax">
            <h2>FORM SYNTAX</h2>
            <pre><code>&lt;html&gt;
&lt;body&gt;
    &lt;form action="register.php" method="post"&gt;
        student no.: &lt;input type="text" name="id"&gt;
        &lt;br&gt;
        name: &lt;input type="text" name="name"&gt;
        &lt;br&gt;
        section: &lt;input type="text" name="section"&gt;
        &lt;br&gt;
        &lt;input type="submit"&gt;
    &lt;/form&gt;
&lt;/body&gt;
&lt;/html&gt;</code></pre>
        </div>
<!-- MYSQL -->
        <div class="section">
            <h2>MYSQL</h2>
            <p>MySQL is a database system used on the web. It runs on a server and is ideal for both small and large applications. MySQL is used for a wide range of purposes, including data warehousing, e-commerce, and logging applications.</p>
        </div>
<!-- CONNECTION -->
        <div class="section">
            <h2>CONNECTION</h2>
            <p>A connection is like a pipeline of sorts that allows communication between a DBMS and an application program. With MySQL databases, we have to supply the following information when making a database connection: the host or URL of the database server, the database name, and the database user name and password.</p>
        </div>
<!-- WHY MYSQL? -->
        <div class="section">
            <h2>WHY MYSQL?</h2>
            <ul>
                <li>MySQL is easy to use, yet extremely powerful, fast, secure, and scalable.</li><br>
                <li>MySQL runs on a wide range of operating systems, including UNIX or Linux, Microsoft Windows, Apple Mac OS X, and others.</li><br>
                <li>MySQL supports standard SQL (Structured Query Language).</li><br>
                <li>MySQL is an ideal database solution for both small and large applications.</li><br>
                <li>MySQL is developed and distribuited by oracle corporation.</li><br>
                <li>MySQL includes data security layers that protect sensitive data from intruders.</li>
            </ul>
        </div>
<!-- HOW TO OPEN DATABASE CONNECTION? -->
        <div class="section">
            <h2>HOW TO OPEN DATABASE CONNECTION?</h2>
            <pre><code>$link = mysqli_connect("hostname", "username", "password", "database");</code></pre>
        </div>
<!-- HOW TO CLOSE DATABASE CONNECTION? -->
        <div class="section">
            <h2>HOW TO CLOSE DATABASE CONNECTION?</h2>
            <pre><code>mysqli_close($link);</code></pre>
        </div>
<!-- CONCLUSION -->
        <div class="conclusion">
            <h2>CONCLUSION</h2>
            <p>As we conclude the PHP programming course, we want to take a moment to reflect on the collaborative journey we've undertaken in creating our innovative web application. This project has not only deepened our understanding of PHP programming but also allowed us to apply essential skills in developing a comprehensive platform that includes quizzes, an integrated compiler, and PHP courses.</p>
            <p>Throughout this course, we have engaged with critical concepts such as server-side scripting, database integration, and user interaction. By achieving our course outcomes—designing a modern web application, utilizing scripts for server-side processing, and effectively managing databases—we have demonstrated our ability to solve problems and think critically in real-world scenarios.</p>
            <p>As we move forward, we encourage each of you to continue exploring the dynamic field of web development, building on the foundations laid in this course. Your newfound skills in PHP and web application development will serve you well in future endeavors, whether in academic pursuits or professional projects.</p>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <span class="footer-left">© php. all rights reserved 2023</span>
            <span class="footer-right">BSCS502</span>
        </div>
    </footer>
</body>
</html>
