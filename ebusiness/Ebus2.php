<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <!-- Title -->
        <title>Enter Details</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!-- Refer to the CSS stylesheets -->
        <link rel="stylesheet" href="store.css" type="text/css"/>
        <link rel="stylesheet" href="../allstyle.css" type="text/css"/>
        
        <!-- Refer to Javascript page -->
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
    <body>
        
        <!-- Top navagation bar -->
        <div class="icon-bar">
            
            <!-- Click to visit various parts of the website -->
            <a href="../homepage.html"><img src="https://png.icons8.com/metro/1600/home.png" alt="Click to visit the Home page." title="Home" class="icon"></img></a>
            <a href="../cv/cv_page1.html"><img src="https://d30y9cdsu7xlg0.cloudfront.net/png/225927-200.png" alt="Click to visit the Curriculum Vitae page." title="Curriculum Vitae" class="icon"></img></a> 
            <a href="../interests/sports.html"><img src="https://cdn2.iconfinder.com/data/icons/sports-attitudes/1451/swimming-512.png" alt="Click to visit the Interests page." title="Interests" class="icon"></img></a>
            <a href="about.html"><img src="https://i.pinimg.com/originals/28/a1/c3/28a1c3fa6ccab19c6b1216a581b0ebe2.png" alt="Click to visit the Smartest Cloud Ltd. page." title="Smartest Cloud Ltd." class="icon"></img></a>
            
            <!-- Click to visit my Github page -->
            <a href="https://github.com/bis1683/is1113117331683/graphs/commit-activity"><img src="https://png.icons8.com/metro/1600/github.png" alt="Click to visit my Github page." title="Github Link" class="icon"></img></a>
            
            <!-- Click to visit offical Heroku page -->
            <a href="https://is1113117331683.herokuapp.com"><img src="https://png.icons8.com/windows/1600/heroku.png" alt="Click to visit the page through the offical Heroku link." title="is1113117331683.herokuapp.com" class="icon"></img></a>

            <!-- Heading -->
            <h4>Please enter your payment details</h4>
        </div>
        <br/>
        <br/>
        
        <div>
        <!-- Layout of the page and proceed to Ebus3 when all actions completed -->
        <form method="POST" action="Ebus3.php" name="Details">
            
            <!-- Name textbox -->
            <label for="user_name">Name: </label>
            <input type="text" id="user_name" placeholder="eg. John Smith" name="user_name"/>
            <br/>
            <br/>
            
            <!-- Email textbox -->
            <label for="user_email">Email: </label>
            <input type="text" id="user_email" placeholder="eg. 999@gmail.com" name="user_email"/>
            <br/>
            <br/>
            
            <!-- PIN textbox -->
            <label for="user_pin">PIN: </label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4"/>
            <br/>
            <br/>
        
            <!-- Button to submit -->
            <button type="submit" id="btnPurchase" class="button4" style="width:350px;" disabled>Proceed with Purchase</button>
            <br/>
            <br/>
        </form>
        
        <!-- Button to validate -->
        <button class="button4" style="width:100px;" onClick="validateDetails()">Validate</button>
        </div>    
        
        <?php
        //Set session variables to be passed to the next page, Ebus3
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["user_email"] = $_POST["user_email"];
        $_SESSION["total"] = $_POST["total"];
        ?>
    </body>
    
</html>