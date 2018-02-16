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
    </head>
    
    <body>
        <!-- Heading -->
        <h4>Please enter your payment details</h4>
        <br/>
        
        <!-- Layout of the Page and Proceed to Ebus3 when all actions completed -->
        <form method="POST" action="Ebus3.php" name="Details">
            
            <!-- Name Textbox -->
            <label for="user_name">Name</label>
            <input type="text" id="user_name" name="user_name"/>
            <br/>
            <br/>
            
            <!-- Email Textbox -->
            <label for="user_email">Email</label>
            <input type="text" id="user_email" name="user_email"/>
            <br/>
            <br/>
            
            <!-- PIN Textbox -->
            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4"/>
            <br/>
            <br/>
        
            <!-- Button to Submit -->
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            <br/>
            <br/>
            
        </form>
        
        <!-- Button to Validate -->
        <button onClick="validateDetails()">Validate</button>
        
       <script type="text/javascript" src="ebus2_validator.js"></script>
       
       <?php
       //Set session variables
       $_SESSION["user_name"] = $_POST["user_name"];
       $_SESSION["user_email"] = $_POST["user_email"];
       $_SESSION["total"] = $_POST["total"];
       ?>
    </body>
    
</html>