/*global $ */

//Used (console.log()) to identify the errors

//Function to check the textboxes
function validateDetails(){
    
    var name = document.getElementById("user_name").value; //Declare and assign a value
    var email= document.getElementById("user_email").value; //Declare and assign a value
    var pin = document.getElementById("user_pin").value; //Declare and assign a value
    
    if(name == ""){
        alert("Please enter your Name"); //If the textbox is empty 
    }
    else if(email == ""){
        alert("Please enter your Email"); //If the textbox is empty 
    } 
    else if(pin == ""){
        alert("Please enter your PIN"); //If the textbox is empty 
    }
    else if(String(pin).length < 4){
        alert("Your PIN was incorrect, please enter it again."); //If the PIN is invaild 
        disablebtnPurchase();
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