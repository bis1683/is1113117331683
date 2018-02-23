<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <!-- Title -->
        <title>Receipt</title>
        
        <!-- Refer to the CSS stylesheets -->
        <link rel="stylesheet" href="store.css" type="text/css"/>
        <link rel="stylesheet" href="../allstyle.css" type="text/css"/>
    </head>
    
    <body>
        
        <!-- Top navagation bar -->
        <div class="icon-bar">
            
            <!-- Click to visit various parts of the website -->
            <a href="../homepage.html"><img src="http://icons.iconarchive.com/icons/iconsmind/outline/512/Home-2-2-icon.png" alt="Click to visit the Home page." title="Home" class="icon"></img></a>
            <a href="../cv/cv_page1.html"><img src="http://icons.iconarchive.com/icons/iconsmind/outline/512/Profile-icon.png" alt="Click to visit the Curriculum Vitae page." title="Curriculum Vitae" class="icon"></img></a> 
            <a href="../interests/sports.html"><img src="http://icons.iconarchive.com/icons/icons8/windows-8/512/Sports-Swimming-icon.png" alt="Click to visit the Interests page." title="Interests" class="icon"></img></a>
            <a href="about.html"><img src="http://icons.iconarchive.com/icons/iconsmind/outline/512/Clouds-icon.png" alt="Click to visit the Smartest Cloud Ltd. page." title="Smartest Cloud Ltd." class="icon"></img></a>
            
            <!-- Click to visit my Github page -->
            <a href="https://github.com/bis1683/is1113117331683/graphs/commit-activity"><img src="http://icons.iconarchive.com/icons/icons8/windows-8/512/Programming-Github-icon.png" alt="Click to visit my Github page." title="Github Link" class="icon"></img></a>
            
            <!-- Click to visit offical Heroku page -->
            <a href="https://is1113117331683.herokuapp.com"><img src="https://images.contentful.com/3ouphkrynjol/2JnkoMjwxy8s8cCwyeogai/2f29f18c92df8feb3cf7928d2cf3f8a3/heroku-512.png" alt="Click to visit the page through the offical Heroku link." title="is1113117331683.herokuapp.com" class="icon"></img></a>

            <!-- Heading -->
            <h4>Receipt</h4>
        </div>
        <br/>
        <br/>

        <div>
            <?php
            //Echo session variables that were set on previous page, Ebus2
            echo "Name: " . $_POST["user_name"] . "<br/>";
            echo "Email: " . $_POST["user_email"] . "<br/>";
            echo "Total Price: " . $_SESSION["total"] . "<br/>";
            ?>
        </div>
    </body>
    
</html>