<?php
//Start the session
session_start();
?>

<!DOCTYPE html>
<html>
    
    <head>
        
        <!-- Title of the form -->
        <title>Receipt</title>
    </head>
    
    <body>
        
        <!-- Heading -->
        <h4>Receipt</h4>
        <br/>
        
        <?php
        //Echo session variables that were set on previous page, Ebus2
        echo "Name: " . $_POST["user_name"] . "<br/>";
        echo "Email: " . $_POST["user_email"] . "<br/>";
        echo "Total Price: " . $_SESSION["total"] . "<br/>";
        ?>
    </body>
    
</html>