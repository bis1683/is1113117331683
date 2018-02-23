<!DOCTYPE html>
<html>
    
    <head>
        
        <!-- Title of the form -->
        <title>Select Product</title>
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <!-- Refer to the CSS stylesheet -->
        <link rel="stylesheet" href="store.css" type="text/css"/>
        <link rel="stylesheet" href="../allstyle.css" type="text/css"/>
        
        <!-- Refer to Javascript page -->
        <script type="text/javascript" src="cost_calc.js"></script>
    </head>
    
    <body>
        
        <!-- Top navagation bar -->
        <div class="icon-bar">
            
            <!-- Icon to bring the user to various part of the website -->
            <a href="../homepage.html"><img src="http://icons.iconarchive.com/icons/iconsmind/outline/512/Home-2-2-icon.png" alt="Click to go to the Homepage." class="icon" title="Home"></img></a>
            <a href="../cv/cv_page1.html"><img src="http://icons.iconarchive.com/icons/iconsmind/outline/512/Profile-icon.png" alt="Click to go to the Curriculum Vitae page." class="icon" title="Curriculum Vitae"></img></a> 
            <a href="../interests/sports.html"><img src="http://icons.iconarchive.com/icons/icons8/windows-8/512/Sports-Swimming-icon.png" alt="Click to go to the Interests page." class="icon" title="Interests"></img></a>
            <a href="../aboutcloud.html"><img src="http://icons.iconarchive.com/icons/iconsmind/outline/512/Clouds-icon.png" alt="Click to go to the About Cloud page." class="icon" title="About Cloud"></img></a>
            <a href="Ebus1.php"><img src="http://icons.iconarchive.com/icons/iconsmind/outline/512/Shopping-Cart-icon.png" alt="Click to go to the Online Store page." class="icon" title="Online Store"></img></a>
            
            <!-- Link to my Github page -->
            <a href="https://github.com/bis1683/is1113117331683/graphs/commit-activity"><img src="http://icons.iconarchive.com/icons/icons8/windows-8/512/Programming-Github-icon.png" alt="Click to go to my Github page." class="icon" title="Github Link"></img></a>
            
            <!-- Link of my offical Heroku page -->
            <a href="https://is1113117331683.herokuapp.com"><img src="https://images.contentful.com/3ouphkrynjol/2JnkoMjwxy8s8cCwyeogai/2f29f18c92df8feb3cf7928d2cf3f8a3/heroku-512.png" alt="Click to visit the page through the offical Heroku link." class="icon" title="is1113117331683.herokuapp.com"></img></a>

            <!-- Heading -->
            <h4><strong>Select a Product</strong></h4>
        </div>
        <br/>
        <br/>

        <div>
        <!-- Layout of the page and proceed to Ebus2 when all actions completed -->
        <form method="POST" action="Ebus2.php">
            
            <!-- Saleforce radio button -->
            <label for="salesforce">
                <input type="radio" id="salesforce" name="product" checked onClick="disablebtnProceed()"/>
                SaleForce @ $100
            </label>
            <br/>
            <br/>
            
            <!-- Cloud 9 radio button -->
            <label for="cloud9">
                <input type="radio" id="cloud9" name="product" onClick="disablebtnProceed()"/>
                Cloud 9 @ $200
            </label>
            <br/>
            <br/>
            
            <!-- AWS radio button -->
            <label for="aws">
                <input type="radio" id="aws" name="product" onClick="disablebtnProceed()"/>
                Amazon Web Services @ $300
            </label>
            <br/>
            <br/>
            
            <!-- Gmail radio button -->
            <label for="gmail">
                <input type="radio" id="gmail" name="product" onClick="disablebtnProceed()"/>
                Gmail @ $400
            </label>
            <br/>
            <br/>
           
            <!-- Subtotal textbox -->
            <label for="subtotal">
                Sub Total: 
                <input type="text" id="subtotal" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- Discount textbox -->
            <label for="discount">
                Discount @ 5%: 
                <input type="text" id="discount" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
            
            <!-- VAT textbox -->
            <label for="vat">
                VAT @ 10%: 
                <input type="text" id="vat" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
           
            <!-- Total textbox -->
            <label for="total">
                Total: 
                <input type="text" id="total" name="total" value="0.00" readonly/>
            </label>
            <br/>
            <br/>
        
            <!-- Button to submit -->
            <button type="submit" id="btnProceed" class="button4" style="width:250px; height:48px;" disabled>Add to Shopping Cart</button>
            <br/>
            <br/>
        </form>
        
        <!-- Button to calculate the total cost and button to clear the form to start again-->
        <p><button class="button4" style="width:300px; height:48px;" onClick="calcSub()" >Calculate Cost</button>
        <a href="Ebus1.php"><button class="button3" style="width:150px; height:48px;">Clear Choice</button></a></p>
        </div>
    </body>
    
</html>