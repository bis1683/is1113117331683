/*global $ */

function validateDetails(){

    var name;
    var email;
    var pin;
    
    name = document.getElementById("user_name").value;
    
    if(name == ""){
        alert("Please enter your Name.");
    }
    
    email = document.getElementById("user_email").value;
    
    if(email == ""){
        alert("Please enter your Email.");
    }
    
    pin = document.getElementById("user_pin").value;
    
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

function enablebtnPurchase(){
    $("#btnPurchase").prop("disabled", false);
}

function disablebtnPurchase(){
    $("#btnPurchase").prop("disabled", true);
}