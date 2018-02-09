<!DOCTYPE html>

<html>
    
    <head>
        
        <!-- Page title of the form -->
        <title>Select Product</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="cost_calc.js"></script>
        
    </head>
    
    <body>
        
        <!-- Heading on the form -->
        <h4><strong>Select a Product</strong></h4>
        
        <!-- Layout of the Page -->
        <form method="POST" action="Ebus2.php">

            <!--Display Radio Button -->
                <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SaleForce @ $100
            </label>
        
            <!-- Blank lines -->
            <br/>
            <br/>
            <br/>
        
            <!--Display Radio Button -->
            <label for ="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                AWS @ $300
            </label>
        
            <!-- Blank lines -->
            <br/>
            <br/>
            <br/>
        
            <!--Display Textbox -->
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
        
            <!-- Blank lines -->
            <br/>
            <br/>
            <br/>
        
            <!--Display Textbox -->
            <label for="total">
                Total
                <input type="text" id="total" value="0.00" readonly/>
            </label>
        
            <!-- Blank lines -->
            <br/>
            <br/>
            <br/>
        
            <!--Display Button -->
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
        
        </form>
        
        <!-- Blank lines -->
        <br/>
        <br/>
        <br/>
        
        <!--Display Button -->
        <button onClick="calcSub()">Calculate Cost</button>
        <a role="button" href="Ebus1.php">Clear Choice</a>
        
    </body>
    
</html>>