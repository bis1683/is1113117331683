/* global $ */

//If statement to determine the subtotal
function calcSub(){
    
    var argSubTotal; //Declare the variable
    
    if(document.getElementById("salesforce").checked){
        argSubTotal = 100; //The subtotal if Saleforce is checked
    }
    else if(document.getElementById("cloud9").checked){
        argSubTotal = 200; //The subtotal if Cloud 9 is checked
    }
    else if(document.getElementById("aws").checked){
        argSubTotal = 300; //The subtotal if Amazon Web Services is checked
    }
    else{
        argSubTotal = 400; //The subtotal if Gmail is checked
    }
    
    calcDisVatTotal(argSubTotal); //Pass the value to complete the function calcDisVatTotal()
}

//Function to calculate discount, vat and total
function calcDisVatTotal(parmSubTotal){
    
    //Declare all the variables 
    var subTotal;
    var x = 0.05;
    var discountAmt;
    var y = 0.1;
    var vatAmt;
    var totalPrice;

    subTotal = parmSubTotal; //Pass the parameter value into a variable
    discountAmt = (subTotal * x); //Calculate the discount
    vatAmt = ((subTotal - discountAmt) * y); //Calculate the vat
    totalPrice = (subTotal - discountAmt + vatAmt ); //Calculate the total
    
    display(subTotal, discountAmt, vatAmt, totalPrice); //Pass the value to complete the function display()
}

//Function to display all the value passed through
function display(parm1, parm2, parm3, parm4){
    
    document.getElementById("subtotal").value = parm1; //Display subtotal
    document.getElementById("discount").value = parm2; //Display discount
    document.getElementById("vat").value = parm3; //Display vat
    document.getElementById("total").value = parm4; //Display total
    
    enablebtnProceed(); //Activate btnProceed
}

//Function that enables the proceed button
function enablebtnProceed(){
    $("#btnProceed").prop("disabled", false);
}

//Function that disable the proceed button
function disablebtnProceed(){
    $("#btnProceed").prop("disabled", true);
}