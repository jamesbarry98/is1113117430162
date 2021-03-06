/* global $ */

function calcSub(){
    
    var argSubTotal; 
    
    if(document.getElementById('salesforce').checked) {
      argSubTotal = 100;
    }
   
   else if(document.getElementById('aws').checked) {
      argSubTotal = 300;
   }
   
   else if(document.getElementById('cloud9').checked) {
      argSubTotal = 200;
   }
   
    else {
      argSubTotal = 400;
    }
    
    calcDisVatTotal(argSubTotal); /* this passes the sub total onto my next function */
    
}

function calcDisVatTotal(parmSubTotal){ /* parmsubtotal accepts the passed value */
    var argSubTotal;
    var argDiscount;
    var argVat;
    var argTotalPrice;
    
    argSubTotal = parmSubTotal;
    argDiscount = .05 * argSubTotal;
    argVat = (argSubTotal-argDiscount) * .1;
    argTotalPrice = argSubTotal -argDiscount + argVat;
    
    display(argSubTotal, argDiscount, argVat, argTotalPrice); /* again pass the relivant figures */
}

    
function display(parm1, parm2, parm3, parm4){
  
  document.getElementById("subtotal").value = parm1;
  document.getElementById("discount").value = parm2;
  document.getElementById("vat").value = parm3;
  document.getElementById("total").value = parm4;
  
        
  enablebtnProceed();
}


function enablebtnProceed(){
    $('#btnProceed').prop('disabled', false);
}

function disablebtnProceed() {
    $('#btnProceed').prop('disabled', true);
}        