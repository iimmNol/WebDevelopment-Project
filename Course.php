<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Course Website</title> 
    <script src="Course.js" defer></script> <link rel="stylesheet" href="Course.css"> 
    <link rel="icon" href="" type="">

</head>
<body>

    <h1>PHP Course Modules</h1> 

    <div class="course-container">

        <?php for ($i = 1; $i <= 7; $i++): ?>
            <div class="course-section">
                <div class="course-title"><?php echo $i; ?>. 
                <?php 
                // Define course titles dynamically
                switch ($i) {
                    case 1:
                        echo "Introduction to PHP";
                        break;
                    case 2:
                        echo "PHP Basic Syntax";
                        break;
                    case 3:
                        echo "Conditional and Looping Structure";
                        break;
                    case 4:
                        echo "Arrays and Superglobals";
                        break;
                    case 5:
                        echo "Classes, Objects and Forms";
                        break;
                    case 6:
                        echo "MySQL";
                        break;
                    case 7:
                        echo "Conclusion";
                        break;
                }
                ?>
                </div>
                <div class="course-content">
                    <p>
                        <?php
                        // Define course content dynamically
                        switch ($i) {
                            case 1:
                                echo "PHP is a popular general-purpose scripting language that is especially suited to web development. It is fast, flexible, and pragmatic, making it a go-to choice for building dynamic websites.";
                                break;
                            case 2:
                                echo "The syntax of PHP is similar to other programming languages. The PHP code is executed on the server and the result is returned to the browser as plain HTML.";
                                // Sample program for section 2
                                echo '<div class="sample-program">';
                                echo '  <strong>Sample PHP Program:</strong><br>';
                                echo '  <code>';
                                echo '    &lt;?php<br>';
                                echo '    echo "Hello, PHP!";<br>';
                                echo '    ?&gt;';
                                echo '  </code>';
                                echo '</div>';
                                break;
                            case 3:
                                echo "Conditional statements and loops in PHP allow you to control the flow of your program. Examples include `if`, `else`, `while`, `for`, and `foreach`.";
                                break;
                            case 4:
                                echo "Arrays store multiple values in one variable, and superglobals are predefined variables in PHP like \$_GET, \$_POST, and \$_SESSION that are always accessible.";
                                break;
                            case 5:
                                echo "PHP supports object-oriented programming (OOP). You can define classes, instantiate objects, and manage forms using OOP concepts in PHP.";
                                break;
                            case 6:
                                echo "PHP is commonly used with MySQL for database management. You can create, read, update, and delete data in your database using PHP and SQL queries.";
                                break;
                            case 7:
                                echo "This course provides a fundamental understanding of PHP and how it integrates with HTML, databases, and web forms to create dynamic websites.";
                                break;
                        }
                        ?>
                    </p>
                </div>
            </div>
        <?php endfor; ?>

    </div>

    <script>
        // JavaScript to handle the 3D flip effect
        const courseSections = document.querySelectorAll('.course-section');

        courseSections.forEach(section => {
            const title = section.querySelector('.course-title');
            const content = section.querySelector('.course-content');

            title.addEventListener('click', () => {
                section.classList.toggle('active'); 
            });
        });
    </script>
</body>
</html>