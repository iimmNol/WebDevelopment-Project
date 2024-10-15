<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LOOPING STATEMENTS</title>
        <link rel="icon" type="image/png" href="img/coding.png">
        <link rel="stylesheet" href="css/condition.css">
        <link rel="stylesheet" href="css/NavigationBar.css">
        <link rel="stylesheet" href="css/backandfrontbutton.css">
    </head>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

body {
    font-family: 'Barlow Condensed', 'Roboto', sans-serif;
    font-weight: 400; /* You can adjust the font weight as needed */
    color: #fff; /* This will keep the text color consistent with your dark background */
    background-color: #000; /* Ensure the dark background complements the design */
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

p.note {
        background: linear-gradient(90deg, rgba(13,13,13,1) 0%, rgba(61,61,61,1) 73%, rgba(68,124,105,1) 100%);
        color: white;
        padding: 10px;
        border-radius: 5px;
        font-family: 'Barlow Condensed', 'Roboto', sans-serif;
        text-align: center; 
        font-style: italic;
        animation: transitionIn 0.75s;
    }
    </style>
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
        <a href="BasicSyntax.php">
            <button class="back">← BACK</button> 
        </a>
    </div>

<?php
        $page_title = "CONDITIONAL STATEMENTS"; // Using PHP variables
        echo "<h5 class='title'>$page_title</h5>";
    ?>
    <div class="variables-container1">
        <!-- IF STATEMENT -->
        <div class="box1">
            <h2>IF STATEMENT</h2>
            <p>
            &lt;?php <br>
            if (condition) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// code to be executed if condition is true;<br>
            }<br>
            ?&gt;
            </p>
        </div>

        <!-- SWITCH STATEMENT -->
        <div class="box1">
            <h2>SWITCH STATEMENT</h2>
            <p>
            &lt;?php <br>
            switch (n) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;case label1:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// code to be executed<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;case label2:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// code to be executed<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;<br>
            &nbsp;&nbsp;&nbsp;&nbsp;default:<br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// code to be executed<br>
            &nbsp;&nbsp;&nbsp;&nbsp;if n is different from all labels;<br>
            }<br>
            ?&gt;
            </p>
        </div>

        <!-- ELSE STATEMENT -->
        <div class="box1">
            <h2>ELSE KEYWORD</h2>
            <p>
            &lt;?php <br>
            if (condition) {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// code to be executed if condition is true;<br>
            }<br>
            else {<br>
            &nbsp;&nbsp;&nbsp;&nbsp;// code to be executed if condition is false;<br>
            }<br>
            ?&gt;
            </p>
        </div>
    </div>

    <?php
        $page_title = "LOOPING STATEMENTS"; // Using PHP variables
        echo "<h5 class='title'>$page_title</h5>";
    ?>
    <div class="variables-container">
        <div class="box">
            <h2>WHILE STATEMENT</h2>
            <p>
        <!-- WHILE Statement -->
        while (condition is true) {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// code to be executed;<br>
        }<br>
        </div>

        <div class="box">
            <h2>DO-WHILE STATEMENT</h2>
            <p>
          <!-- DO-WHILE Statement -->
        do {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// code to be executed;<br>
        } while (condition is true);<br>
        </div>

        <div class="box">
            <h2>FOR STATEMENT</h2>
            <p>
        <!-- FOR Statement -->
        for (init counter; test counter; increment counter) {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// code to be executed for each iteration;<br>
        }<br>
        </div>

        <div class="box">
            <h2>FOR-EACH STATEMENT</h2>
            <p>
        <!-- FOREACH Statement -->
        foreach ($array as $value) {<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// code to be executed;<br>
        }<br>
        </div>
        </div>
        <br>
        <p class="note">
        The foreach loop works only on arrays and is used to loop through each key/value pair in an array.<br></p>

        <div class="next2">
        <a href="Arrays.php">
            <button class="next">NEXT →</button> 
        </a>
    </div>

    <script src="js/NavigationBar.js"></script>
</body>
</html>