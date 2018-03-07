
/* global $ */

function validateDetails(){
    
    var pin, fullname, homeaddress, email, cardnumber, ValidationTest;
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
    
    cardnumber = document.getElementById("cardnumber").value;
    
    if (cardnumber == ""){
        alert("Please enter your Card Number");
    }
    else if (String(cardnumber).length <16){
        alert("Please make sure your Card Number is accurate");
    }
    else{
        ValidationTest +=1;
    }
    
    homeaddress = document.getElementById("homeaddress").value;
    
    if (homeaddress == ""){
        alert("Please enter your Home Address");
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
    
    if (ValidationTest==5){
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