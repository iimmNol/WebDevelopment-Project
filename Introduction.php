<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorials - Introduction to PHP</title>
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
                <pre><code>&lt;?php <br> //comment <br> echo ("hello"); <br> ?&gt; </code></pre>
            </div>

            <div class="statement">
                <p>To skip the code for checking and debugging <br><br> To understand the code properly <br><br> To take note of what you did last time</p>
                <button class="try it-button">TRY IT →</button>
            </div>
            <!-- PRINTING STATEMENT (ECHO) -->
            <div class="php-printingStatement">
                <h3>PRINTING STATEMENT</h3>
                <p>echo</p>
                <pre><code>&lt;?php <br> echo ("Hello World!"); <br> ?&gt; </code></pre>
                <button class="try it-button">TRY IT →</button>
            </div>
            <!-- PRINTING STATEMENT (PRINT) -->
            <div class="php-printingStatement">
                <h3>PRINTING STATEMENT</h3>
                <p>print</p>
                <pre><code>&lt;?php <br> print "Hello!"; <br> print ("World"); <br> ?&gt; </code></pre>
                <button class="try it-button">TRY IT →</button>
            </div>
            <!-- COMMENTS -->
            <div class="php-comments">
                <h3>COMMENTS</h3>
                <p>/* multiple lines</p>
                <pre><code>&lt;?php <br> echo ("Hello"); <br> /*this is a multi-line comment*/ <br> ?&gt; </code></pre>
                <button class="try it-button">TRY IT →</button>
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
                <pre><code>function functionName($var1, $var2, $var3) { <br> //code here <br>}</code></pre>
            </div>
            <!-- SAMPLE-CODE ON LEFT -->
            <div class="sample-code">
                <h3>Sample Code</h3>
                <pre><code>function add($val1, $val2) { <br> echo $val1 + $val2; <br>} <br>add(5,2);</code></pre>
            </div>  
        </div>
        <!-- SYNTAX ON RIGHT -->    
        <div class="syntax2">
                <h3>Syntax</h3>
                <pre><code>function functionName() { <br> //code here <br>}</code></pre>
            </div>
            <!-- SAMPLE-CODE ON RIGHT -->
            <div class="sample-code2">
                <h3>Sample Code</h3>
                <pre><code>function add() { <br> echo "Hello!"; <br>} <br>greetings();</code></pre>
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
                <pre><code>&lt;?php <br> if (condition) { <br> //code to be executed if condition is true <br> } <br> ?&gt; </code></pre>
                <h3>If Statement</h3>
            </div>
            <!-- SWITCH STATEMENT -->
            <div class="switch-statement">
                <pre><code>&lt;?php <br> switch (n) { <br> case label: <br> //code to be executed if n=label1 <br> break; <br> case label2: <br> //code to be executed if n=label2; <br> break <br> default: <br> //code to be executed if n is different from all labels <br> } <br> ?&gt;</code></pre>
                <h3>Switch Statement</h3>
            </div>
            <!-- ELSE KEYWORD -->
            <div class="else-statement">
                <pre><code>if (condition) { <br> //code <br>} else { <br> //code to be executed if condition is false <br>}</code></pre>
                <h3>Else Keyword</h3>
            </div>
        </div>
<!-- LOOPING STATEMENT -->
        <div class="loops">
            <h2>Looping Statements</h2>
            <!-- WHILE STATEMENT -->
            <div class="loop">
                <pre><code>&lt;php <br> while (condition) { <br> //code to be executed<br> } <br> ?&gt;</code></pre>
                <h3>While Statement</h3>
            </div>
            <!-- DO-WHILE STATEMENT -->
            <div class="loop">
                <pre><code>&lt;php <br> do { <br> //code to be executed; <br>} while (condition is true); <br> ?&gt;</code></pre>
                <h3>Do-While Statement</h3>
            </div>
            <!-- FOR STATEMENT -->
            <div class="loop">
                <pre><code>&lt;php <br> for (init counter; test counter; increment counter) { <br> //code to be executed for each iteration <br> } <br> ?&gt;</code></pre>
                <h3>For Statement</h3>
            </div>
            <!-- FOREACH STATEMENT -->
            <div class="loop">
                <h3>Foreach Statement</h3>
                <pre><code>&lt;php <br> foreach ($array as $value) { <br> //code to be executed;<br> } <br> ?&gt;</code></pre>
            </div>
            
            <div class="foreachInfo">
                <p>The foreach loop works only on arrays and is used to loop through each key/value pair in an array</p>
            </div>
        </div>
    </div>
</body>
</html>
