<!DOCTYPE html>
<html>
    
    <head>
        <!-- Title of the form -->
        <title>Select Product</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
        <!-- Heading -->
        <h4><strong>Select a Product</strong></h4>
        
        <!-- Layout of the Page and Proceed to Ebus2 when all actions completed -->
        <form method="POST" action="Ebus2.php">

            <!-- Saleforce Radio Button -->
                <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SaleForce @ $100
            </label>
            
            <!-- AWS Radio Button -->
            <label for ="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
           
            <!-- Subtotal Textbox -->
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
           
            <!-- Total Textbox -->
            <label for="total">
                Total
                <input type="text" id="total" value="0.00" readonly/>
            </label>
        
            <!-- Button to Submit -->
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            
        </form>
        
        <!-- Button to Calculate the total cost-->
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
    </body>
    
</html>>