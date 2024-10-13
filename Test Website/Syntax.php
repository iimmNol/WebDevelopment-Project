    <!DOCTYPE html>
    <html lang="en">
    <>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Basic Syntax Infographic</title>
        <style>
            body {
            font-family: url('https://fonts.googleapis.com/css?family=Lato:100&display=swap');
            background: rgb(13,13,13);
            background: linear-gradient(90deg, rgba(13,13,13,1) 0%, rgba(61,61,61,1) 73%, rgba(68,124,105,1) 100%);
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            height: 100%;
            margin-bottom:50px;
            }

            h1 {
                font-size: 1.75em; 
                font-weight: bold;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                text-align: center;
                margin-top: 20px; 
                color: #3fbf99;
                position: relative;
            }

            h3 {
                font-size: 2.5em; 
                font-weight: bold;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                text-align: center;
                margin-top: 40px; 
                color: #3fbf99;
                position: relative;
            }

            h4{
                font-size: 2.5em; 
                font-weight: bold;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                text-align: center;
                margin-top: 40px; 
                color: #3fbf99;
                position: relative;
            }
            h5{
                font-size: 2.5em; 
                font-weight: bold;
                letter-spacing: 1.5px;
                text-transform: uppercase;
                text-align: center;
                margin-top: 40px; 
                color: #3fbf99;
                position: relative;
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
                background-color: #f4f7fa; 
                padding: 10px;
                border-radius: 5px;
                font-family: Georgia, serif; 
                text-align: center; 
                font-style: italic;
            }

            p.note1::before {
                content: "NOTE";
                display: inline-block;
                background-color: #3fbf98; 
                color: white; 
                padding: 2px 4px;
                margin-right: 10px;
                font-weight: bold;
                font-family: Arial, sans-serif; /* Different typeface */
            }

            p.note1 {
                background-color: #f4f7fa; /* Light background for the note */
                padding: 10px;
                border-radius: 5px;
                font-family: Georgia, serif; /* Different font style for the note */
                margin-top: -10px; /* Adjust this to move the note closer to the headline */
                text-align: center; /* To align the note with the centered headlines */
                font-style: italic;
            }

    .container {
        display: grid;
        grid-template-columns: repeat(3, 1fr); 
        gap: 20px;
        max-width: 1200px;
        background: rgb(13,13,13);
        background: linear-gradient(90deg, rgba(13,13,13,1) 0%, rgba(61,61,61,1) 73%, rgba(68,124,105,1) 100%);
        padding: 30px;
        border-radius: 20px;
        margin-top: 20px;
        width: 100%;
        justify-content: center; 
        align-items: center;
    }

    .container div {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
    }

    .box {
        background-color: #000;
        color: #fff;
        padding: 20px;
        border-radius: 10px;
        text-align: left;
        min-height: 250px; 
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6); 
    }

    .box h2 {
        font-size: 18px;
        margin-bottom: 10px;
        margin: 10px 0;
        color: #f4f4f4;
        font-size: 18px;
    }

    .code {
        background-color: #222;
        padding: 10px;
        border-radius: 5px;
        font-family: 'Courier New', Courier, monospace;
        color: #3fbf99;
        font-size: 14px;
    }

    .try-it {
        display: inline-block;
        margin-top: 10px;
        padding: 8px 16px;
        background-color: #3fbf99;
        color: #000;
        border-radius: 5px;
        text-decoration: none;
        font-weight: bold;
    }

    .try-it:hover {
        background-color: #447c69;
    }

    .variables-container {
        display: grid;
        grid-template-columns: repeat(4, 1fr); 
        gap: 20px;
        max-width: 1200px;
        padding: 30px;
        margin-top: 20px;
        width: 100%;
        justify-content: center;
        background: rgb(0,0,0);
        background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(61,61,61,1) 73%, rgba(73,91,85,1) 100%);
        border-radius: 50px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.6); 
    }

    .variables-container div {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: center;
        text-align: center;
        transition: transform 0.3s ease;
        padding: 15px;
        border-radius: 10px;
        background-color: #1c1c1c;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
    }

    .variables-container div:hover {
        transform: scale(1.05);
        background-color: #2d2d2d;
    }

    .variables-container div img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 15px;
    }

    .variables-container div p {
        color: #3fbf99;
        font-size: 1.1em;
        margin-top: 10px;
        line-height: 1.5;
    }

    @media (max-width: 900px) {
        .variables-container {
            grid-template-columns: 1fr 1fr; 
        }
    }

    @media (max-width: 600px) {
        .variables-container {
            grid-template-columns: 1fr; 
        }
    }
        </style>
    </head>
<body>
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
            <img src="boolean.png" alt="Boolean Image">
            <p><?php echo "Boolean is the simplest type. A bool expresses a truth value, and it can be either true or false."; ?></p>
        </div>

        <div class="box">
            <img src="integer.png" alt="Integer Image">
            <p><?php echo "An integer is a non-decimal number between -2,147,483,648 and 2,147,483,647."; ?></p>
        </div>

        <div class="box">
            <img src="float.png" alt="Floating-Point Image">
            <p><?php echo "A floating-point number (float) is a number with a decimal part or a number in exponential form."; ?></p>
        </div>

        <div class="box">
            <img src="string.png" alt="String Image">
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
</body>
</html>
