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
        
        <!-- Layout of the Page and Proceed to Ebus3 when all actions completed -->
        <form method="POST" action="Ebus3.php">
            
            <!-- PIN Textbox -->
            <label for="user_pin">PIN</label>
            <input type="password" id="user_pin" placeholder="Card PIN" maxlength="4"/>
        
            <!-- Button to Submit -->
            <button type="submit" id="btnPurchase" disabled>Proceed with Purchase</button>
            
        </form>
        <br/>
        
        <!-- Button to Validate -->
        <button onClick="validateDetails()">Validate</button>
        
       <script type="text/javascript" src="ebus2_validator.js"></script>
    </body>
    
</html>