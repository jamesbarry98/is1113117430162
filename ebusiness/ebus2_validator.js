
/* global $ */

function validateDetails(){
    
    var pin, fullname, email, ValidationTest;
    ValidationTest=0;
    
    pin = document.getElementById("user_pin").value;
    
    if (pin == ""){
        alert("Please enter your PIN");
    }
    else if (String(pin).length < 4){
        alert("Please make sure your PIN is accurate");
    }
    else{
        ValidationTest +=1;
    }
    
    fullname = document.getElementById("fullname").value;
    
    if (fullname == ""){
        alert("Please enter your Full Name");
    }
    else if (isNaN(fullname)){
        ValidationTest +=1;
    }
    else{
         alert("Please enter accurate name");
    }
    
    email = document.getElementById("email").value;
    
    if (email == ""){
        alert("Please enter your Email Address");
    }
    else if (isNaN(email)){
        ValidationTest +=1;
    }
    else{
        alert("Please make sure your email is accurate");
    }
    
    if (ValidationTest==3){
        enablebtnPurchase();
    }
    else{
        disablebtnPurchase();
    }
}

function enablebtnPurchase(){
    $('#btnPurchase').prop('disabled', false);
}

function disablebtnPurchase() {
    $('#btnPurchase').prop('disabled', true);
}