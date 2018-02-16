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
        <br/>
        
        <!-- Layout of the Page and Proceed to Ebus2 when all actions completed -->
        <form method="POST" action="Ebus2.php" name="Product">

            <!-- Saleforce Radio Button -->
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SaleForce @ $100
            </label>
            <br/>
            <br/>
            
            <!-- Cloud 9 Radio Button -->
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            <br/>
            <br/>
            
            <!-- AWS Radio Button -->
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            <br/>
            <br/>
            
            <!-- Gmail Radio Button -->
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            <br/>
            <br/>
           
            <!-- Subtotal Textbox -->
            <label for="subtotal">
                Sub Total
                <input type="text" id="subtotal" name="subtotal" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- Discount Textbox -->
            <label for="discount">
                Discount @ 5%
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- VAT Textbox -->
            <label for="vat">
                VAT @ 10%
                <input type="text" id="VAT" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
           
            <!-- Total Textbox -->
            <label for="total">
                Total
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
        
            <!-- Button to Submit -->
            <button type="submit" id="btnProceed" disabled>Add to Shopping Cart</button>
            <br/>
            <br/>
            
        </form>
        
        <!-- Button to Calculate the total cost-->
        <button onClick="calcSub();">Calculate Cost</button>
        <button href="Ebus1.php">Clear Choice</button>
    </body>
    
</html>