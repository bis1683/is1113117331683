/*global $ */

//Function to ensure all the textbox are filled in
function validateDetails(){

    //Declare all the variables
    var name;
    var email;
    var pin;
    var completed;
    
    //Assign all the variable a value
    name = document.getElementById("user_name").text;
    email = document.getElementById("user_email").text;
    pin = document.getElementById("user_pin").value;
    completed == 0;
    
    //If statement to check if the name textbox is empty
    if(name == ""){
        alert("Please enter your Name.");
    }
    
    //If statement to check if the email textbox is empty
    if(email == ""){
        alert("Please enter your Email.");
    }
    
    //If statement to check if the pin textbox is empty or the pin is invalid
    if(pin == ""){
        alert("Please enter your PIN");
    }
    else if(String(pin).length < 4){
        alert("Please make sure yout PIN is accurate");
    }
    else{
        enablebtnPurchase();
    }
    
}

//Function that enables the proceed button
function enablebtnPurchase(){
    $("#btnPurchase").prop("disabled", false);
}

//Function that disable the proceed button
function disablebtnPurchase(){
    $("#btnPurchase").prop("disabled", true);
}