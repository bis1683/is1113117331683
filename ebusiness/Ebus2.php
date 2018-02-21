<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        <!-- Title of the form -->
        <title>Enter Details</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="ebus2_validator.js"></script>
    </head>
    
    <body>
        <!-- Heading -->
        <h4>Please enter your payment details</h4>
        <br/>
        
        <!-- Layout of the page and proceed to Ebus3 when all actions completed -->
        <form method="POST" action="Ebus3.php" name="Details">
            
            <!-- Name textbox -->
            <label for="user_name">Name</label>
            <input type="text" id="user_name" placeholder="eg. John Smith" name="user_name"/>
            <br/>
            <br/>
            
            <!-- Email textbox -->
            <label for="user_email">Email</label>
            <input type="text" id="user_email" placeholder="eg. 999@gmail.com" name="user_email"/>
            <br/>
            <br/>
            
            <!-- PIN textbox -->
            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4"/>
            <br/>
            <br/>
        
            <!-- Button to submit -->
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            <br/>
            <br/>
            
        </form>
        
        <!-- Button to validate -->
        <button onClick="validateDetails()">Validate</button>
        
        <?php
        //Set session variables to be passed to the next page, Ebus3
        $_SESSION["user_name"] = $_POST["user_name"];
        $_SESSION["user_email"] = $_POST["user_email"];
        $_SESSION["total"] = $_POST["total"];
        ?>
    </body>
    
</html>