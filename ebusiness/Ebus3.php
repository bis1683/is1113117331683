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
            
            <!-- Alt specifies an alternate text for the image, title diaplays the tooltip -->
            
            <!-- Click to visit various parts of the website -->
            <a href="../homepage.html"><img src="https://png.icons8.com/metro/1600/home.png" alt="Click to visit the Home page." title="Home" class="icon"></a>
            <a href="../cv/cv_page1.html"><img src="https://d30y9cdsu7xlg0.cloudfront.net/png/225927-200.png" alt="Click to visit the Curriculum Vitae page." title="Curriculum Vitae" class="icon"></a> 
            <a href="../interests/sports.html"><img src="https://cdn2.iconfinder.com/data/icons/sports-attitudes/1451/swimming-512.png" alt="Click to visit the Interests page." title="Interests" class="icon"></a>
            <a href="about.html"><img src="https://i.pinimg.com/originals/28/a1/c3/28a1c3fa6ccab19c6b1216a581b0ebe2.png" alt="Click to visit the Smartest Cloud Ltd. page." title="Smartest Cloud Ltd." class="icon"></a>
            
            <!-- Click to visit my Github page -->
            <a href="https://github.com/bis1683/is1113117331683/graphs/commit-activity"><img src="https://png.icons8.com/metro/1600/github.png" alt="Click to visit my Github page." title="Github Link" class="icon"></a>
            
            <!-- Click to visit offical Heroku page -->
            <a href="https://is1113117331683.herokuapp.com"><img src="https://png.icons8.com/windows/1600/heroku.png" alt="Click to visit the page through the offical Heroku link." title="is1113117331683.herokuapp.com" class="icon"></a>

            <!-- Heading -->
            <h4>Receipt</h4>
        </div>
        <br/>

        <div>
            <?php
            //Echo session variables that were set on previous page, Ebus2
            echo "Name: " . $_POST["user_name"] . "<br/>";
            echo "Email: " . $_POST["user_email"] . "<br/>";
            echo "Total Price: &#8364;" . $_SESSION["total"] . "<br/>";
            ?>
        </div>
    </body>
    
</html>